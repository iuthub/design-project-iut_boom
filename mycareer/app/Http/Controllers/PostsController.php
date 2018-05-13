<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;   
use DB;         

class PostsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }
     public function filter($id)
    {
      $posts = Post::where('cat_id', '=', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('posts.filter')->with('posts', $posts);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [ 
        'title' => 'required',
        'description' => 'required',
        'body' => 'required',
        'cover_image' =>' image|nullable|max:1999',
        'cat_id' => 'required',
       
        ]);
        

        // Handle file upload
        if($request->hasFile('cover_image')){
            //Get the file name with the ext
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store 

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload the image 
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id; 
        $post->cat_id = $request->input('cat_id');
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        // check the user id 
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error', 'Unautherised Page...');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this ->validate($request, [ 
            'title' => 'required',
            'body' => 'required',
            'description' => 'required',
            'cover_image' =>' image|nullable|max:1999'
            ]);

        // Handle file upload
        if($request->hasFile('cover_image')){
            //Get the file name with the ext
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store 

            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload the image 
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 



            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->description = $request->input('description');
            if($request->hasFile('cover_image')){
                $post->cover_image = $fileNameToStore;
            }
            $post->save();

            return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        // check the user id 
        if(auth()->user()->id != $post->user_id){
            return redirect('/posts')->with('error', 'Unautherised Page...');
        }

        if($post->cover_image !='noimage.jpg')
        {
            //Delete the image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
          
        $post->delete();
        return redirect ('/posts')->with('success', 'Post Removed');
    }
}

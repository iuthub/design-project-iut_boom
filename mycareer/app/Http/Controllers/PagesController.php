<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
use App\User; 
use DB;  
class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        //$posts = Post::orderBy('created_at', 'desc');
        $posts = Post::all();
        $users = User::all();
   
        //return view ('pages.index', compact('title'));
        return view ('pages.index')->withPosts($posts)->withUsers($users);
    } 
    public function contact(){
        return view ('pages.contact');
    }
    public function categories(){
        return view ('pages.Categories');
    } 

    public function filter($id)
    {
        $posts = Post::where('cat_id', '=', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function about(){
        $title = 'About us';
        return view ('pages.about')->with('title', $title);
    }
    //public function services(){
      //  $data = array(
        //    'title'=> 'Services',
          //  'services'=>['IT', 'Medicine', 'Architecture']
       // );
    //    return view ('pages.contact')->with($data);
    //}
}
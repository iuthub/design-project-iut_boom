<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Admin;
use DataTables;
use Validator;
class AjaxdataController extends Controller
{
  
   
    function getUserdata()
    {
    	$users=User::select('id','name','lastname','email','created_at');
    	
    	return DataTables::of($users)->make(true);
    }

    function getAdmindata()
    {
      $admins=Admin::select('id','name','lastname','email','created_at');
      
      return DataTables::of($admins)
        ->addColumn('action', function ($user) {
                return '<a href="#" class="btn btn-xs btn-primary edit"  id="'.$user->id.'">
                <i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
      ->make(true);
    }

    function getposts()
   { 
    $posts=Post::select('id','title','body','created_at','user_id','cover_image','description');
      
      return DataTables::of($posts)->make(true);
   }

    
   function postdata (Request $request)
    { 
      $validation=Validator::make($request-> all(),[
       'name' =>'required',
       'lastname' => 'required',
       'email' =>'required',
       'password' =>'required'
      ]);
      $error_array= array();
      $success_output='';
     
            if ($request->get('button_action') == "insert")
            {
            	$admin =new Admin([
                       'name' =>$request->get('name'),
                       'lastname'=>$request->get('lastname'),
                       'email'=>$request->get('email'),
                       'password'=>$request->get('password')

            	]);
            	$admin->save();
             	$success_output='<div class="alert alert-success"> Data Inserted </div>';
                 
            }  
            if ($request->get('button_action')=='update')
            {
            	$admin=Admin::find($request->get('admin_id'));

            	$admin->name=$request->get('name');
            	$admin->lastname=$request->get('lastname');
            	$admin->email=$request->get('email');
                $admin->password=$request->get('password');
                $admin->save();
                $success_output = '<div class="alert alert-success">Data Updated</div>';
            } 
      
	       $output = array(
            'error'     =>  $error_array,
            'success'   =>  $success_output
        );
        echo json_encode($output);
    }
   function fetchdata(Request $request)
   {
   	 $id= $request->input('id');
   	 $admin=Admin::find($id);
   	 $output=array(
   	 	'name'=>$admin->name,
        'lastname' =>$admin->lastname,
        'email'=>$admin->email,
        'password'=>$admin->password
   	);
     
   	 echo json_encode($output);
   }
   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Datatables;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function basicTable()
    {
     return view('admin.basictable');
    }
    public function map()
    {
     return view('admin.map-google');
    }
    
    
}

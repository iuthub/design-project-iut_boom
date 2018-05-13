<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/filter/{id}','PagesController@filter')->name('filter');


Route::get('admin/map-google','AdminController@map');
Route::get('admin/home','AdminController@index');
Route::get('admin/home/getposts','AjaxdataController@getposts')->name('admin.home.getposts');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST ('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request'); 
Route::POST ('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET ('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/basictable','AdminController@basicTable');
Route::get('admin/basictable/getUserdata','AjaxdataController@getUserdata')->name('admin.basictable.getUserdata');
Route::get('admin/basictable/getAdmindata','AjaxdataController@getAdmindata')->name('admin.basictable.getAdmindata');


Route::get('admin/profile', function () {
    return view('admin/profile');
});
 
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::POST('admin/basictable/postdata','AjaxdataController@postdata')->name('admin.basictable.postdata');	
Route::get('admin/basictable/fetchdata','AjaxdataController@fetchdata')->name('admin.basictable.fetchdata');	


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/project','PagesController@project');
Route::get('/contact','PagesController@contact');
Route::resource('posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');



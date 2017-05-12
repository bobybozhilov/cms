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
    return view('welcome');
});

//Route::get('/about', function () {
//    return "HI about page";
//});
//
//Route::get('/contact', function () {
//    return "Hi i am contact";
//});
//
//Route::get('/post/{id}/{name}', function($id, $name){
//    return "$name this is number" . $id;
//});
//
//Route::get('admin/posts/example',array('as'=>'admin.home' ,function(){
//
//    $url = route('admin.home');
//
//    return "this url is $url";
//
//}));

//Route::get('post/{id}','PostsController@index');

Route::resource('posts', 'PostsController');

Route::group(['middleware' => ['web']], function () {

});
<?php

use App\Post;

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


/*
 * ELOQUENT
 */

//Route::get('/forcedelete', function () {
//
//    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});
//Route::get('readsoftdelete', function () {
////    return Post::find(1);
//    $posts = Post::withTrashed()->whereNotNull('deleted_at')->get();
//    foreach ($posts as $post) {
//        $post->restore();
//        echo $post;
//    }
//
//
//});
//Route::get('/softdelete/{id}', function ($id) {
//    $post = Post::find($id);
//    $post->delete();
//});
//Route::get('/delete/{id}', function ($id) {
//    $post = Post::find($id);
//    $post ->delete();
//});
//
//Route::get('/delete2', function () {
//    Post::destroy([4,5]);
//});

//Route::get('/update', function () {
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'new title', 'content'=>'new content']);
//});
//
//Route::get('/create', function () {
//    Post::create(['title'=>'the create method', 'content' => 'I am learning how to create content']);
//});
//
//Route::get('/basicinsert', function () {
//    $post = new Post;
//    $post->title = "New Eloquent title instert";
//    $post->content ='Eloquent is pretty cool';
//    $post->save();
//});
//
//Route::get('/basicinsert2   ', function () {
//    $post = Post::find(2);
//    $post->title = "New Eloquent title instert 2 ";
//    $post->content ='Eloquent is pretty cool 2';
//    $post->save();
//});
//
//Route::get('/findmore', function () {
//   $posts = Post::where('user_count','<', 50)->firstOrFail();
//});
//Route::get('/find', function() {
//    $posts = \App\Post::where('id', 2)->orderBy('id','desc')->take(1)->get();
//    return $posts;
//});

//
//Route::get('/read', function() {
//    $posts = App\Post::all();
//
//    foreach ($posts as $post){
//        return $post->title;
//    }
//
//});
//
//Route::get('/find', function () {
//    $posts = App\Post::find(1);
//
//    return $posts->title;
//});
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
//Route::get('/insert', function () {
//    DB::insert('INSERT INTO posts(title, content, created_at, updated_at) VALUES(?,?,?,?)', ['PHP with laravel', 'Laravel is cool', Carbon\Carbon::now(), Carbon\Carbon::now()]);
//});
//
//Route::get('/read', function () {
//    $results = DB::select('SELECT * FROM posts WHERE id = ?', [1]);
//    foreach ($results as $post) {
//        return $post->title;
//    }
//
//});
//
//Route::get('update', function () {
//    $updated = DB::update('UPDATE posts SET title = "update table" WHERE id = ?', [1]);
//    return $updated;
//});
//
//Route::get('delete', function () {
//    $deleted = DB::delete('DELETE FROM posts WHERE id = ?', [2]);
//});
//
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');
//
//Route::resource('/post', 'PostsController');
//
//Route::get('/contact', 'PostsController@contact');

Route::group(['middleware' => ['web']], function () {

});

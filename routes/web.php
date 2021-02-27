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

Auth::routes();

Route::get('/', 'BlogController@index');
// Route::get('/konten_post', function () {
//     return view('blog.konten_post');
// });

Route::get('/konten-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');
Route::get('/list-post', 'BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/pencarian', 'BlogController@cari')->name('blog.cari');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::resource('/category', 'CategoryController');
    Route::resource('/tag', 'TagController');

    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::get('/post/post_hapus', 'PostController@post_hapus')->name('post.post_hapus');
    Route::delete('post/delete/{id}', 'PostController@delete')->name('post.delete');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
});

<?php

use Illuminate\Support\Facades\Route;

//User Routes
Route::group(['namespace' => 'App\Http\Controllers\User'], function(){
    Route::get('/', 'HomeController@index')->name('blog');
    Route::get('post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');

    // Vue Routes
    Route::post('getPosts','PostController@getAllPosts');
});

//Admin Routes
Route::group(['namespace' => 'App\Http\Controllers\Admin'], function(){
    Route::get('admin/home', 'HomeController@home')->name('admin.home');
    //Users Routes
    Route::resource('admin/user','UserHomeController');
    //Roles Routes
    Route::resource('admin/role','RoleController');
    //Permission Routes
    Route::resource('admin/permission','PermissionController');
    //Post Routes
    Route::resource('admin/post','PostController');
    //Tag Routes
    Route::resource('admin/tag','TagController');
    //Catwgory Routes
    Route::resource('admin/category','CategoryController');
    //Admin Auth Routes
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login','Auth\LoginController@login');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

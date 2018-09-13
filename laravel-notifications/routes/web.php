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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
# -- posts
Route::resource('posts', 'Posts\PostController');

# -- guardar os comentarios
Route::post('comment', 'Comments\CommentController@store')->name('comment.store');


#-- rota para notifications do user

Route::get('notifications', 'NotificationController@notifications')->name('notifications');

# -- Marcar como lida
Route::put('notifications-read', 'NotificationController@markAsRead');

# -- Marcar todas como lida
Route::put('notifications-all-read', 'NotificationController@markAllAsRead');


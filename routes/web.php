<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

 
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


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/post/create', function () {
DB::table('post')->insert
([
    'title'=>'intelligence',
   'body'=>'Intelligence has been defined in many ways: the capacity for logic, understanding, self-awareness, learning, emotional knowledge, reasoning, planning, creativity, critical thinking, and problem-solving'
  ]);
});
Route::get('/post', function () {
    $post=Post::find(1);
    return $post;
});
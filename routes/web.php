<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Http\Controllers\BlogController;

 
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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/blog/add', function () {
DB::table('blog')->insert
([
  'name'=>'Alua',
   'surname'=>'Otezhan',
   'age'=>20
  ]);
});
Route::get('/blog', function () {
    $blog=Blog::find(1);
    return $blog;
});
Route::get('blog', [BlogController::class,'index']);
Route::get('blog/create', function () {
    return view('blog.create');
});
Route::post('blog/create', [BlogController::class,'store'])->name('add-blog');
Route::get('blog/{id}', [BlogController::class,'get_blog']);
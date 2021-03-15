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


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/blog/create', function () {
DB::table('blog')->insert
([
  'name'=>'Alua',
   'surname'=>'Otezhan',
   'age'=>20
  ]);
});
Route::get('/blog', function () {
    $blog=Blog::find(1);
    return $post;
});
Route::get('blog', [BlogController::class,'index']);
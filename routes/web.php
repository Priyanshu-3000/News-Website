<?php
use App\Http\Controllers\contactController;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\postcontroller;
use Illuminate\Support\Facades\Route;
use  app\Models\contact;
use App\Models\blog;
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

Route::view('/','index');
Route::view('/contact','contact');
Route::view('/lastest_news','lastest_news');
Route::view('/blog','blog');
Route::view('/e_paper','e_paper');
Route::view('/gallery','gallery');
Route::view('/subscribe','subscribe');
Route::view('/post','post');
Route::view('/admin','admin');
Route::view('/post','post');


Route::POST('/CONTACT', [contactController::class,'CONTACTS']);
Route::POST('/blog', [blogcontroller::class,'index']);
Route::get('/lastest_news', [postcontroller::class,'index']);
Route::POST('/post', [postcontroller::class,'post']);
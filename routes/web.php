<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\SeriesController;
Route::get('/series', [SeriesController::class,'index']);
Route::post('/series', [SeriesController::class,'recherche']);


use App\Http\Controllers\ContactsController;
Route::get('/contact', [ContactsController::class,'index']);

Route::get('/series/{id}',[SeriesController::class, 'show']);   

Route::post('/contact/create', [ContactsController::class, 'store']);
Route::post('/contact/contact/create', [ContactsController::class, 'store']);


//Route::resource('series', SerieController::class);
use App\Http\Controllers\SerieController;
Route::resource('/admin/series',SerieController::class)->only(['index','create','store','show','edit','update','destroy']);

Route::get('/delete/{id}',[SerieController::class, 'delete']); 


use App\Http\Controllers\CommentController;
Route::post('/comment/create',[CommentController::class, 'store']);






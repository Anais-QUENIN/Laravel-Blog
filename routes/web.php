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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\SeriesController;
Route::get('/series', [SeriesController::class,'index']);


use App\Http\Controllers\ContactsController;
Route::get('/contact', [ContactsController::class,'index']);

Route::get('/series/{id}',[SeriesController::class, 'show']);   //tentative de route pour atteindre une serie dans la liste de serie(les transformer en lien)

Route::post('/contact/create', [ContactsController::class, 'store']);
Route::post('/contact/contact/create', [ContactsController::class, 'store']);
// les routes pour le formulaire
//jmettre methode create dans contactscontrollers dans la methode create elle doit recup les données du formulaire et les stocker en base (table contact)
//mettre les routes 

//Route::resource('series', SerieController::class);
use App\Http\Controllers\SerieController;
Route::resource('/admin/series',SerieController::class)->only(['index','create','store','show','edit','update','destroy']);

Route::get('/delete/{id}',[SerieController::class, 'delete']); 


use App\Http\Controllers\CommentController;
Route::post('/comment/create',[CommentController::class, 'store']);



//use App\Http\Controllers\PhotoController;
//Route::resource('photos', PhotoController::class)
//->missing(function (Request $request) {      //il s'agit de la missing methode, voir point 7
 //   return Redirect::route('photos.index');
//});



/*Route::resource('photos', PhotoController::class)->only([ //exemple de spécification de traitement d'actions dans le controller
    'index', 'show'
]);
 
Route::resource('photos', PhotoController::class)->except([ //idem
    'create', 'store', 'update', 'destroy'
]);*/
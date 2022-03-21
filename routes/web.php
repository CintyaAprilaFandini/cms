<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
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
Route::get('/',[PostController::class, 'index']);
//Route::get('/', [HomeController::class, 'index']);

//Route::get('/about', [AboutController::class, 'index']);

//Route::get('/articlepage/{id}', [ArticleController::class, 'index']);
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/home', function(){
  //      return view('home');
  //  });
        
    //    Route::get('/contact-us', function(){
      //      return view('Contact');
        // });
        
     //   Route::get('/catalogs', function(){
       //     return view('catalogs');
       // });
        
        // Route::get('/team', function(){
          //  return view('ourTeam');
       // });
Route::get('/',[PostController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

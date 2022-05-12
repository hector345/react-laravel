<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'show']);
//grupo de rutas /campany
//blog
Route::controller(PostsController::class)->group(function () {
    //create
    Route::get("/posts/create", "create");
    Route::get("/posts/{post}", "show");
    //store
    Route::post("/posts", "store");
    //edit
    Route::get("/posts/{post}/edit", "edit");
    //update patch
    Route::patch("/posts/{post}", "update");
    //delete
    Route::delete("/posts/{post}", "destroy");
});

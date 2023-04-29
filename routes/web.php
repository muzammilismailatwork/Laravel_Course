<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("users/{name}",[User::class,"index"]);
Route::get("users/",[User::class,"loadView"]);
Route::get("users/{name}",[User::class,"static"]);
Route::get("user2",[User::class,"user"]);
Route::get("user3",[User::class,"condition"]);
Route::get("foreach",[User::class,"loop"]);


Route::get("noaccess",[FormController::class,"noaccess"])->name("noaccess");
Route::get("secreat",[FormController::class,"secreat"])->name("secreat");
Route::group(["middleware"=>["Secreat"]], function(){
    Route::get("login",[FormController::class,"login_page"]);
    Route::post("data",[FormController::class,"get_data"]);
});


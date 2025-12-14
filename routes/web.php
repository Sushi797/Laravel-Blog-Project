<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ADfoodController;
use App\Http\Controllers\ADHomeController;
use App\Http\Controllers\ADnatureController;
use App\Http\Controllers\ADrecentController;
use App\Http\Controllers\ADsportController;
use App\Http\Controllers\ADtravelController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\cretaeController;
use App\Http\Controllers\editController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NatureController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Test', [HomeController::class, "home"]);

Route::get('about', [AboutController::class, "about"]);

Route::get('travel', [TravelController::class, "Travel"]);

Route::get('food', [FoodController::class, "food"]);

Route::get('sport', [SportController::class, "sport"]);

Route::get('nature', [NatureController::class, "nature"]);

Route::get('contact', [ContactUsController::class, "contactus"]);

Route::get('show/{id}', [ShowController::class, 'show']);

//---------------------------------------------------------------------------------



Route::get('AD', [ADrecentController::class, "recent"]);

Route::get('ADtravel', [ADtravelController::class, "travel"]);
Route::get('ADfood', [ADfoodController::class, "food"]);
Route::get('ADsport', [ADsportController::class, "sport"]);
Route::get('ADnature', [ADnatureController::class, "nature"]);


Route::get('create', [cretaeController::class, "create"]);
Route::post('update', [cretaeController::class, "Update"]);
Route::delete('delete/{id}', [cretaeController::class,'delete']);
Route::get('edit/{id}', [editController::class, "Edit"]);

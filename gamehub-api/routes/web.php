<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::group(["prefix" => "users"], function () {
    Route::get("/", [UserController::class, "index"])->name("index");
    Route::get("/{id}", [UserController::class, "show"])->name("show");
    Route::post("/", [UserController::class, "store"])->name("store");
    Route::put("/{id}", [UserController::class, "update"])->name("update");
    Route::delete("/{id}", [UserController::class, "destroy"])->name("destroy");
});
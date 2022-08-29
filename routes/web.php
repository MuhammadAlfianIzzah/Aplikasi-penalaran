<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"])->name("home");
// Route::get('/', [AppController::class, "index"]);
Route::controller(AppController::class)->group(function () {
    Route::get("/pencarian-kata", "showPencarianKata")->name("pencarian-kata");
    Route::post("/pencarian-kata", "prosesPencarianKata")->name("pencarian-kata-post");
    Route::get("/replace-word", "showReplaceWord")->name("replace-word");
    Route::post("/replace-word", "postReplaceWord")->name("replace-word-post");

    Route::get("/sort-word", "showSortWord")->name("sort-word");
    Route::post("/sort-word", "postSortWord")->name("sort-word-post");
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

//Create
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");
//Store
Route::post("/", [ComicController::class, "store"])->name("comics.store");

Route::get('/', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');

//Edit
Route::get('/{id}/edit', [ComicController::class, 'edit'])->name('comics.edit');
//Update
Route::put("/{id}", [ComicController::class, "update"])->name("comics.update");

//Delete
Route::delete("/{id}", [ComicController::class, "destroy"])->name("comics.destroy");
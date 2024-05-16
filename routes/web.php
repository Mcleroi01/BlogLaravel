<?php

use App\Http\Controllers\ArticlesCtrl;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EtiquetteController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    return response()->json([
        ['id' => '1', 'nom' => 'formation laravel'],
        ['id' => '2', 'nom' => 'formation mobile'],
        ['id' => '2', 'nom' => 'formation mobile']
    ]);
});



Route::get("/pays", [TestController::class,'getpays'])->name('listPays');
Route::get("/pays/createpays", [TestController::class,'create'])->name('createPays');
Route::post('/pays',[TestController::class, 'store'])->name('savepays');
Route::get('/pays/{id}', [TestController::class, 'getPaysId'])->name('detailsPays');


Route::resource('articles',ArticlesCtrl::class);
Route::resource('Categories',CategorieController::class);
Route::resource('etiquettes',EtiquetteController::class);

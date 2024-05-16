<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/categorie',CategoriesController::class,['as'=>'api']);
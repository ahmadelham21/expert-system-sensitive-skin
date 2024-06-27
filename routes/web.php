<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SymptomController;
use App\Http\Controllers\DiseaseController;;

Route::get('/', function()  {
    return view('index');
})->name('index');;

Route::get('/rules', function()  {
    return view('rules/index');
})->name('rules.index');;
Route::get('/rules', function()  {
    return view('rules/index');
})->name('rules.index');;

Route::resource('symptoms', SymptomController::class);
Route::resource('disease', DiseaseController::class);
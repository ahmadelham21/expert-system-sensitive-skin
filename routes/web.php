<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SymptomController;

Route::get('/', function()  {
    return view('index');
})->name('index');;
Route::get('/diseases', function()  {
    return view('disease/index');
})->name('disease.index');;
Route::get('/rules', function()  {
    return view('rules/index');
})->name('rules.index');;

Route::resource('symptoms', SymptomController::class);
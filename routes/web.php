<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SymptomController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\RuleController;

Route::get('/', function()  {
    return view('index');
})->name('index');;

Route::get('/rules', function()  {
    return view('rules/index');
})->name('rules.index');;
Route::get('/diagnoses', function()  {
    return view('diagnoses/index');
})->name('diagnoses.index');;

Route::resource('symptoms', SymptomController::class);
Route::resource('disease', DiseaseController::class);
Route::resource('rules', RuleController::class);
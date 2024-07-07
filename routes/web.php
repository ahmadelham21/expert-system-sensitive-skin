<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\SymptomController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ExpertSystemController;
use App\Http\Controllers\AuthController;
// Rute yang dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
   

    Route::get('/rules', function () {
        return view('rules.index');
    })->name('rules.index');

    Route::get('/diagnoses', function () {
        return view('diagnoses.index');
    })->name('diagnoses.index');

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::resource('symptoms', SymptomController::class);
    Route::resource('disease', DiseaseController::class);
    Route::resource('rules', RuleController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Rute yang tidak dilindungi oleh middleware 'auth'
Route::get('/', function () {
    return view('expert-system.index');
})->name('expert-system.index');

Route::get('/expert-system/questions', [ExpertSystemController::class, 'index'])
    ->name('expert-system.questions');
    Route::get('/about-us', function () {
        return view('expert-system/about-us');
    })->name('expert-system.about-us');
    Route::get('/profile', function () {
        return view('expert-system/profile');
    })->name('expert-system.profile');

    
    Route::get('/info-penyakit', [ExpertSystemController::class, 'information'])->name('expert-system.info-penyakit');

Route::post('/expert-system/diagnose', [ExpertSystemController::class, 'diagnose'])
    ->name('expert-system.diagnose');

// Rute autentikasi untuk guest
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});
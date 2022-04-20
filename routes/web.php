<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/Home',[IndexController::class, 'index'])->name('/');
Route::get('/Portfolio',[PortfolioController::class, 'index'])->name('portfolio');
Route::get('/Work_Experiences',[ExperienceController::class, 'index'])->name('experience');
Route::get('/My_journey_with_Microsoft',[ExperienceController::class, 'exp_microsoft'])->name('microsoft');
Route::get('/Oops!',[ExperienceController::class, 'Error404'])->name('workingonit');
Route::get('/Certifications',[CertificationController::class, 'index'])->name('certification');
Route::get('/Achievements',[AchievementController::class, 'index'])->name('achievement');
Route::get('/Academics',[AcademicController::class, 'index'])->name('academic');
Route::get('/Contact_Me',[ContactController::class, 'index'])->name('contact');
Route::post('/Contact submission',[ContactController::class, 'store'])->name('contact.submit');
Route::get('/Admin',[AdminController::class, 'index'])->name('admin');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {Route::get('/register', function () { return view('auth.register'); })->name('register');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'
])->group(function () {Route::post('/register',[RegisteredUserController::class, 'store'])->name('register');
});

Route::get('/Contact_view',[ContactController::class, 'view'])->name('contact.view');
Route::delete('/Contact_destroy',[ContactController::class, 'destroy'])->name('contact.delete');



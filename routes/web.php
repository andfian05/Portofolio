<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\SummaryController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\TampilanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\PortfolioItem;
use Illuminate\Support\Facades\Auth;
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

Route::get('/pengalaman', function () {
    return view('front-end.detail-page.pengalaman');
});


Route::get('/medsos', function () {
    return view('front-end.detail-page.mediasosial');
});


Route::get('/', [TampilanController::class, 'index'])->name('pageone');
Route::get('project', [TampilanController::class, 'showPortfolio'])->name('front-end.detail-page.proyek');
Route::get('education', [TampilanController::class, 'showEducation'])->name('front-end.detail-page.pendidikan');
Route::get('experience', [TampilanController::class, 'showExperience'])->name('front-end.detail-page.pengalaman');


Auth::routes();
Route::get('home_admin', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home_admin');

Route::group(['middleware' => ['auth'], 'prefix'=> 'admin', 'as' => 'admin.'], function(){
    Route::resource('summary', SummaryController::class);
    Route::get('resume/unduh', [SummaryController::class, 'resumeUnduh'])->name('resume.unduh');
    
    // Route::resource('profile', ProfileController::class);
    
    Route::resource('project', PortfolioItemController::class);
    Route::patch('project', [PortfolioItemController::class, 'store'])->name('project.store');

    Route::resource('education', EducationController::class);
    Route::patch('education', [EducationController::class, 'store'])->name('education.store');

    Route::resource('experience', ExperienceController::class);
    Route::patch('experience', [ExperienceController::class, 'store'])->name('experience.store');

});





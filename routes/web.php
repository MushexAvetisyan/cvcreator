<?php


use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/resume/download','ResumeController@download')->name('resume.download');
Route::get('/resume', 'ResumeController@index')->name('resume.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user-detail', 'UserDetailController');
    Route::resource('education', 'EducationController');
    Route::resource('experience', 'ExperienceController');
    Route::resource('skill', 'SkillController');

});

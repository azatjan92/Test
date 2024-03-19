<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
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

Route::middleware(['set_locale']) ->group(function () {

    Route::get('/', 'App\Http\Controllers\Public\PublicController@home');
    Route::get("/hotline", "App\Http\Controllers\Public\PublicController@hotline")->name('hotline');
    Route::get("/auth", "App\Http\Controllers\Public\PublicController@auth")->name('auth');

    Route::get("/service", "App\Http\Controllers\Public\PublicController@service")->name('service');

    Route::get("/pay", "App\Http\Controllers\Public\PublicController@pay")->name('pay');

    Route::get("/cash", "App\Http\Controllers\Public\PublicController@cash")->name('cash');

    Route::get('/search', 'App\Http\Controllers\Public\PublicController@search')->name('search');

    Route::get("/meters", "App\Http\Controllers\Public\PublicController@meters")->name('meters');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


    Route::get('setlocale/{locale}', [LocalizationController::class, 'setLocale'])->name('setlocale');


    Route::group(['middleware' => 'is_admin'], function () {
            Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
            Route::get('/admin/create-news', [AdminController::class, 'createNews'])->name('admin.createNews');
            Route::post('/admin/news', [AdminController::class, 'storeNews'])->name('admin.storeNews');

        Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news.index');
    });

    Route::post('/news', 'App\Http\Controllers\NewsController@store')->name('news.store');

    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });

    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

    Route::post('/news', 'App\Http\Controllers\NewsController@store')->name('news.store');

    Route::get('/admin/meters/{id}/edit', [AdminController::class, 'editMeterReading'])->name('admin.meters.edit');

    Route::put('/admin/meters/{id}', [AdminController::class, 'updateMeterReading'])->name('admin.meters.update');


    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::post('/admin/update', [AdminController::class, 'update'])->name('admin.update');


    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');


    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/meters', 'App\Http\Controllers\UserController@index')->name('meters');


    Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



    Route::post('/feedback', 'App\Http\Controllers\FeedbackController@store')->name('feedback.store');

    Route::post('/submit-feedback', 'App\Http\Controllers\FeedbackController@store')->name('feedback.submit');


    Route::middleware('auth.user')->group(function () {
        Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.index');
        Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
    });

    Route::middleware('auth')->get('/admin/feedbacks', [FeedbackController::class, 'adminFeedbacks'])->name('admin.feedbacks');



    Route::get('/admin/feedbacks', [FeedbackController::class, 'adminFeedbacks'])->name('feedback.admin');

    Route::get('/admin/feedbacks/{id}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
    Route::post('/admin/feedbacks/{id}/update', [FeedbackController::class, 'update'])->name('feedback.update');


    Route::post('/feedback/reply/{id}', [FeedbackController::class, 'reply'])->name('feedback.reply');


    Route::post('/feedback/update/{id}', 'App\Http\Controllers\FeedbackController@update')->name('feedback.update');


    Route::get('/feedback/filtered', 'App\Http\Controllers\FeedbackController@filteredIndex')->name('feedback.filteredIndex');

    Route::post('admin/feedback/reply/{id}', 'FeedbackController@reply')->name('admin.feedback.reply');



    Route::get('/news/{id}', 'App\Http\Controllers\NewsController@show')->name('news.show');


});
















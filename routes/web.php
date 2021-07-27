<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamWorkController;

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

 
Route::group(['prefix' => 'laravel-filemanager' ], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/',[HomeController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::prefix('slider')->group(function(){
        Route::get('/', [SliderController::class, 'index'])->name('slider');
        Route::get('/add', [SliderController::class, 'add'])->name('slider.add');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
        Route::get('/update_status/{id}', [SliderController::class, 'updateStatus'])->name('slider.update_status');
    });

    Route::prefix('aboutus')->group(function(){
        Route::get('/', [AboutUsController::class, 'index'])->name('aboutus');
        Route::get('/add', [AboutUsController::class, 'add'])->name('aboutus.add');
        Route::post('/store', [AboutUsController::class, 'store'])->name('aboutus.store');
        Route::get('/edit/{id}', [AboutUsController::class, 'edit'])->name('aboutus.edit');
        Route::post('/update/{id}', [AboutUsController::class, 'update'])->name('aboutus.update');
        Route::get('/delete/{id}', [AboutUsController::class, 'delete'])->name('aboutus.delete');
    });

    Route::prefix('services')->group(function(){
        Route::get('/', [ServicesController::class, 'index'])->name('services');
        Route::get('/add', [ServicesController::class, 'add'])->name('services.add');
        Route::post('/store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::post('/update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::get('/delete/{id}', [ServicesController::class, 'delete'])->name('services.delete');
        Route::get('/update_status/{id}', [ServicesController::class, 'updateStatus'])->name('services.update_status');
    });

    Route::prefix('teamwork')->group(function(){
        Route::get('/', [TeamWorkController::class, 'index'])->name('teamwork');
        Route::get('/add', [TeamWorkController::class, 'add'])->name('teamwork.add');
        Route::post('/store', [TeamWorkController::class, 'store'])->name('teamwork.store');
        Route::get('/edit/{id}', [TeamWorkController::class, 'edit'])->name('teamwork.edit');
        Route::post('/update/{id}', [TeamWorkController::class, 'update'])->name('teamwork.update');
        Route::get('/delete/{id}', [TeamWorkController::class, 'delete'])->name('teamwork.delete');
    });

    Route::prefix('portfolio')->group(function(){
        Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
        Route::get('/add', [PortfolioController::class, 'add'])->name('portfolio.add');
        Route::post('/store', [PortfolioController::class, 'store'])->name('portfolio.store');
        Route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
        Route::post('/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
        Route::get('/delete/{id}', [PortfolioController::class, 'delete'])->name('portfolio.delete');
    });

    Route::prefix('news')->group(function(){
        Route::get('/', [NewController::class, 'index'])->name('news');
        Route::get('/add', [NewController::class, 'add'])->name('news.add');
        Route::post('/store', [NewController::class, 'store'])->name('news.store');
        Route::get('/edit/{id}', [NewController::class, 'edit'])->name('news.edit');
        Route::post('/update/{id}', [NewController::class, 'update'])->name('news.update');
        Route::get('/delete/{id}', [NewController::class, 'delete'])->name('news.delete');
    });

    Route::prefix('testimonials')->group(function(){
        Route::get('/', [TestimonialController::class, 'index'])->name('testimonials');
        Route::get('/add', [TestimonialController::class, 'add'])->name('testimonials.add');
        Route::post('/store', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::get('/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonials.delete');
    });

    Route::prefix('clients')->group(function(){
        Route::get('/', [ClientController::class, 'index'])->name('clients');
        Route::get('/add', [ClientController::class, 'add'])->name('clients.add');
        Route::post('/store', [ClientController::class, 'store'])->name('clients.store');
        Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
        Route::post('/update/{id}', [ClientController::class, 'update'])->name('clients.update');
        Route::get('/delete/{id}', [ClientController::class, 'delete'])->name('clients.delete');
    });

    Route::prefix('contacts')->group(function(){
        Route::get('/', [ContactController::class, 'index'])->name('contacts');
        Route::get('/mail', [ContactController::class, 'formMail'])->name('contacts.view');
        Route::post('/sendMail', [ContactController::class, 'sendMail'])->name('contacts.sendMail');
        Route::get('/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
    });



});
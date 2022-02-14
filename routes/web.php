<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


 Route::get('/', [App\Http\Controllers\doctorController::class, 'welcome'])->name('index');
Route::get('/ourdoctors',[App\Http\Controllers\doctorController::class, 'ourdoctors'])->name('doctor.ourdoctors');
Route::get('/aboutus',[App\Http\Controllers\doctorController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[App\Http\Controllers\doctorController::class, 'contactus'])->name('contactus');


// Route::get('contactus/create',[App\Http\Controllers\contactusController::class,'create'])->name('contactus.create');
Route::post('contactus/store',[App\Http\Controllers\contactusController::class,'store'])->name('contactus.store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/doctor/index',[App\Http\Controllers\doctorController::class, 'index'])->name('doctor.index');


Route::get('doctor/create',[App\Http\Controllers\doctorController::class,'create'])->name('doctor.create');
Route::post('doctor/store',[App\Http\Controllers\doctorController::class,'store'])->name('doctor.store');


Route::get('doctor/{id}/edit',[App\Http\Controllers\doctorController::class,'edit'])->name('doctor.edit');
Route::patch('doctor/{id}/edit',[App\Http\Controllers\doctorController::class,'update'])->name('doctor.update');

Route::delete('doctor/{id}/delete',[App\Http\Controllers\doctorController::class,'destroy'])->name('doctor.delete');

//contact us

Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

Route::get('contact/{id}/edit',[App\Http\Controllers\ContactController::class,'edit'])->name('contact.edit');
Route::patch('contact/{id}/edit',[App\Http\Controllers\ContactController::class,'update'])->name('contact.update');


//banner

Route::get('banner', [App\Http\Controllers\bannerController::class, 'index'])->name('banner.index');

Route::get('banner/{id}/edit',[App\Http\Controllers\bannerController::class,'edit'])->name('banner.edit');
Route::patch('banner/{id}/edit',[App\Http\Controllers\bannerController::class,'update'])->name('banner.update');

//service

Route::get('service', [App\Http\Controllers\serviceController::class, 'index'])->name('service.index');
Route::get('service/create', [App\Http\Controllers\serviceController::class, 'create'])->name('service.crate');
Route::post('service/store', [App\Http\Controllers\serviceController::class, 'store'])->name('service.store');

Route::get('service/{id}/edit',[App\Http\Controllers\serviceController::class,'edit'])->name('service.edit');
Route::patch('service/{id}/edit',[App\Http\Controllers\serviceController::class,'update'])->name('service.update');

//social links

Route::get('social', [App\Http\Controllers\socialController::class, 'index'])->name('social.index');

Route::get('social/{id}/edit',[App\Http\Controllers\socialController::class,'edit'])->name('social.edit');
Route::patch('social/{id}/edit',[App\Http\Controllers\socialController::class,'update'])->name('social.update');

//welcome

Route::get('welcome', [App\Http\Controllers\welcomeimgController::class, 'index'])->name('welcome.index');

Route::get('welcome/{id}/edit',[App\Http\Controllers\welcomeimgController::class,'edit'])->name('welcome.edit');
Route::patch('welcome/{id}/edit',[App\Http\Controllers\welcomeimgController::class,'update'])->name('welcome.update');

Route::get('welcomecontent', [App\Http\Controllers\welcomecontentController::class, 'index'])->name('welcomecontent.index');

Route::get('welcomecontent/{id}/edit',[App\Http\Controllers\welcomecontentController::class,'edit'])->name('welcomecontent.edit');
Route::patch('welcomecontent/{id}/edit',[App\Http\Controllers\welcomecontentController::class,'update'])->name('welcomecontent.update');


Route::get('welcomehaedings',[App\Http\Controllers\welcomehaedingsController::class,'index'])->name('welcomehaedings.index');


Route::get('welcomehaedings/{id}/edit',[App\Http\Controllers\welcomehaedingsController::class,'edit'])->name('welcomehaedings.edit');
Route::patch('welcomeheadings/{id}/update',[App\Http\Controllers\welcomehaedingsController::class,'update'])->name('welcomehaedings.update');


Route::get('contactus/index',[App\Http\Controllers\contactusController::class,'index'])->name('contactus.index');

//about us

Route::get('aboutus/index', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus.index');
Route::get('aboutus/create', [App\Http\Controllers\AboutusController::class, 'create'])->name('aboutus.crate');
Route::post('aboutus/store', [App\Http\Controllers\AboutusController::class, 'store'])->name('aboutus.store');

Route::get('aboutus/{id}/edit',[App\Http\Controllers\AboutusController::class,'edit'])->name('aboutus.edit');
Route::patch('aboutus/{id}/update',[App\Http\Controllers\AboutusController::class,'update'])->name('aboutus.update');


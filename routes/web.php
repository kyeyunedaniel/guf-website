<?php

use App\Http\Controllers\ContactSubmissionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/leadership', 'pages.leadership')->name('leadership');
Route::view('/vision-mission', 'pages.vision-mission')->name('vision-mission');
Route::view('/services', 'pages.services')->name('services');
Route::view('/products', 'pages.products')->name('products');
Route::view('/partners', 'pages.partners')->name('partners');
Route::view('/clients', 'pages.clients')->name('clients');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactSubmissionController::class, 'store'])->name('contact.store');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/cookie-policy', 'pages.cookie-policy')->name('cookie-policy');
Route::get('/google37f8358e7a69262f.html', fn() => response('google-site-verification: google37f8358e7a69262f.html')->header('Content-Type', 'text/html'));

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'Homepage'])->name('Homepage');

Route::get('/Chi-Siamo', [PublicController::class,'aboutus'])->name('aboutus');

Route::get('/Chi-Siamo/detail/{name}', [PublicController::class, 'ChiSiamodetail'] )->name('ChiSiamodetail');

Route::get('/Contatti',  [PublicController::class, 'Contacts'])->name('Contacts');

Route::get('/movies', [MovieController::class, 'movielist'] )->name('movielist');

Route::post('/contact-us', [PublicController::class, 'contactUs'] )->name('contactUs');

Route::get('/movie/create', [MovieController::class, 'create'] )->name('movie.create')->middleware('auth');

Route::post('/movie/submit', [MovieController::class, 'store'] )->name('movie.submit');

Route::post('/movie/Create', [MovieController::class, 'store'] )->name('movie.submit')->middleware('auth');





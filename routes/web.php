<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/books', [PageController::class, 'books'])->name('books');

// Route::get('/books', function () {return view('books');})->name('books');

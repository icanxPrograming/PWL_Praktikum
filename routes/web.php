<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Bookshelfs;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    $user = User::first();
    return view('profile', compact('user'));
});

Route::get('/books', function () {
    $bookshelves = Bookshelfs::withCount('books')->get();
    return view('index', compact('bookshelves'));
})->name('index');

Route::get('/books/{id}', function ($id) {
    $bookshelf = Bookshelfs::with('books')->findOrFail($id);
    return view('show', compact('bookshelf'));
})->name('show');
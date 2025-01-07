<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Posts\Index;
use App\Livewire\Users\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/posts', Index::class)->name('posts.index');
Route::get('/users/{user}', Show::class)->name('users.show');

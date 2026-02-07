<?php

use App\Livewire\FormComponent;
use App\Livewire\FullPageComponent;
use App\Livewire\Page1Component;
use App\Livewire\Page2Component;
use App\Livewire\Page3Component;
use App\Livewire\PostComponent;
use App\Livewire\TodoComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/full-page/{id}/{post}', FullPageComponent::class);
Route::get('/form', FormComponent::class);
Route::get('/todo', TodoComponent::class);
Route::get('/posts', PostComponent::class);
Route::get('/page1', Page1Component::class);
Route::get('/page2', Page2Component::class);
Route::get('/page3', Page3Component::class);
Route::view('/tailwind', 'TailwindDesign');
Route::view('/landing-page', 'landing-page');
Route::view('/positioning-page', 'positioning-page');

require __DIR__ . '/settings.php';

<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Livewire\Getstarted;
use App\Livewire\ModalSection;
use App\Livewire\InputSection;
use App\Livewire\ButtonSection;
use App\Livewire\LinksSection;
use App\Livewire\Comingsoon;
use App\Livewire\AlertSection;
use App\Livewire\LoadingSection;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    // Route::get('GetStarted', Getstarted::class)->name('getstarted');
});

Route::get('Getstarted', Getstarted::class)->name('getstarted');
Route::get('Modal-section', ModalSection::class)->name('modal-section');
Route::get('Input-section', InputSection::class)->name('input-section');
Route::get('button-section', ButtonSection::class)->name('button-section');
Route::get('links-section', LinksSection::class)->name('links-section');
Route::get('alert-section', AlertSection::class)->name('alert-section');
Route::get('loading-section', LoadingSection::class)->name('loading-section');
Route::get('notavailable', Comingsoon::class)->name('comingsoon');


require __DIR__.'/auth.php';

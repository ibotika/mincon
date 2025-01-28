<?php

use App\Livewire\CheckIn;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accommodations', function(){
    return view('accommodations');
})->name('accommodations');

Route::get('/speaker-1', function(){
    return view('speakers.speaker-1');
})->name('speaker-1');

Route::get('/speaker-2', function(){
    return view('speakers.speaker-2');
})->name('speaker-2');

Route::get('/speaker-3', function(){
    return view('speakers.speaker-3');
})->name('speaker-3');

Route::get('/speaker-4', function(){
    return view('speakers.speaker-4');
})->name('speaker-4');

Route::get('/speaker-5', function(){
    return view('speakers.speaker-5');
})->name('speaker-5');

Route::get('/speaker-6', function(){
    return view('speakers.speaker-6');
})->name('speaker-6');

Route::get('/speaker-7', function(){
    return view('speakers.speaker-7');
})->name('speaker-7');

Route::get('/speaker-8', function(){
    return view('speakers.speaker-8');
})->name('speaker-8');

Route::get('/speaker-9', function(){
    return view('speakers.speaker-9');
})->name('speaker-9');

Route::get('/speaker-10', function(){
    return view('speakers.speaker-10');
})->name('speaker-10');

Route::get('/speaker-11', function(){
    return view('speakers.speaker-11');
})->name('speaker-11');

Route::get('/speaker-12', function(){
    return view('speakers.speaker-12');
})->name('speaker-12');


Route::get('/speaker-13', function(){
    return view('speakers.speaker-13');
})->name('speaker-13');


Route::get('/speaker-14', function(){
    return view('speakers.speaker-14');
})->name('speaker-14');


Route::get('/speaker-15', function(){
    return view('speakers.speaker-15');
})->name('speaker-15');


Route::get('/speaker-16', function(){
    return view('speakers.speaker-16');
})->name('speaker-16');


Route::get('/speaker-17', function(){
    return view('speakers.speaker-17');
})->name('speaker-17');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('checkin', CheckIn::class);

require __DIR__.'/auth.php';

Route::get('/registrants', function(){
    return view('attendees.registrants');
})->name('registrants');


Route::get('/attendees', function(){
    return view('attendees.attendees');
})->name('attendees');

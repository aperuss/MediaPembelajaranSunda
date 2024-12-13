<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MateriController;
use App\Http\Controllers\KreditController;

use App\Http\Controllers\Bab1Controller;
use App\Http\Controllers\Bab2Controller;
use App\Http\Controllers\Bab3Controller;
use App\Http\Controllers\Bab4Controller;
use App\Http\Controllers\Bab5Controller;
use App\Http\Controllers\Bab6Controller;
use App\Http\Controllers\Bab7Controller;
use App\Http\Controllers\Bab8Controller;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboardguest');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth', 'guru')->group(function (){
    Route::get('/materisiswa', [MateriController::class, 'index'])->name('materisiswa');
    Route::get('/kredit', [KreditController::class, 'index'])->name('kredit');
    // KELAS 7
    Route::get('/bab1kelas7guru', [Bab1Controller::class, 'indexguru7'])->name('bab1kelas7guru');
    Route::get('/bab2kelas7guru', [Bab2Controller::class, 'indexguru7'])->name('bab2kelas7guru');
    Route::get('/bab3kelas7guru', [Bab3Controller::class, 'indexguru7'])->name('bab3kelas7guru');
    Route::get('/bab4kelas7guru', [Bab4Controller::class, 'indexguru7'])->name('bab4kelas7guru');
    Route::get('/bab5kelas7guru', [Bab5Controller::class, 'indexguru7'])->name('bab5kelas7guru');
    Route::get('/bab6kelas7guru', [Bab6Controller::class, 'indexguru7'])->name('bab6kelas7guru');
    Route::get('/bab7kelas7guru', [Bab7Controller::class, 'indexguru7'])->name('bab7kelas7guru');
    Route::get('/bab8kelas7guru', [Bab8Controller::class, 'indexguru7'])->name('bab8kelas7guru');
    // KELAS 8
    Route::get('/bab1kelas8guru', [Bab1Controller::class, 'indexguru8'])->name('bab1kelas8guru');
    Route::get('/bab2kelas8guru', [Bab2Controller::class, 'indexguru8'])->name('bab2kelas8guru');
    Route::get('/bab3kelas8guru', [Bab3Controller::class, 'indeguru8'])->name('bab3kelas8guru');
    Route::get('/bab4kelas8guru', [Bab4Controller::class, 'indexguru8'])->name('bab4kelas8guru');
    Route::get('/bab5kelas8guru', [Bab5Controller::class, 'indexguru8'])->name('bab5kelas8guru');
    Route::get('/bab6kelas8guru', [Bab6Controller::class, 'indexguru8'])->name('bab6kelas8guru');
    Route::get('/bab7kelas8guru', [Bab7Controller::class, 'indexguru8'])->name('bab7kelas8guru');
    Route::get('/bab8kelas8guru', [Bab8Controller::class, 'indexguru8'])->name('bab8kelas8guru');
    // KELAS 9
    Route::get('/bab1kelas9guru', [Bab1Controller::class, 'indexguru9'])->name('bab1kelas9guru');
    Route::get('/bab2kelas9guru', [Bab2Controller::class, 'indexguru9'])->name('bab2kelas9guru');
    Route::get('/bab3kelas9guru', [Bab3Controller::class, 'indexguru9'])->name('bab3kelas9guru');
    Route::get('/bab4kelas9guru', [Bab4Controller::class, 'indexguru9'])->name('bab4kelas9guru');
    Route::get('/bab5kelas9guru', [Bab5Controller::class, 'indexguru9'])->name('bab5kelas9guru');
    Route::get('/bab6kelas9guru', [Bab6Controller::class, 'indexguru9'])->name('bab6kelas9guru');
});

Route::middleware('auth', 'kelas7')->group(function (){
    Route::get('/materikelas7', [MateriController::class, 'index7'])->name('materikelas7');
    Route::get('/kreditkelas7', [KreditController::class, 'index7'])->name('kreditkelas7');
    Route::get('/bab1kelas7', [Bab1Controller::class, 'index7'])->name('bab1kelas7');
    Route::get('/bab2kelas7', [Bab2Controller::class, 'index7'])->name('bab2kelas7');
    Route::get('/bab3kelas7', [Bab3Controller::class, 'index7'])->name('bab3kelas7');
    Route::get('/bab4kelas7', [Bab4Controller::class, 'index7'])->name('bab4kelas7');
    Route::get('/bab5kelas7', [Bab5Controller::class, 'index7'])->name('bab5kelas7');
    Route::get('/bab6kelas7', [Bab6Controller::class, 'index7'])->name('bab6kelas7');
    Route::get('/bab7kelas7', [Bab7Controller::class, 'index7'])->name('bab7kelas7');
    Route::get('/bab8kelas7', [Bab8Controller::class, 'index7'])->name('bab8kelas7');
});

Route::middleware('auth', 'kelas8')->group(function (){
    Route::get('/materikelas8', [MateriController::class, 'index8'])->name('materikelas8');
    Route::get('/kreditkelas8', [KreditController::class, 'index8'])->name('kreditkelas8');
    Route::get('/bab1kelas8', [Bab1Controller::class, 'index8'])->name('bab1kelas8');
    Route::get('/bab2kelas8', [Bab2Controller::class, 'index8'])->name('bab2kelas8');
    Route::get('/bab3kelas8', [Bab3Controller::class, 'index8'])->name('bab3kelas8');
    Route::get('/bab4kelas8', [Bab4Controller::class, 'index8'])->name('bab4kelas8');
    Route::get('/bab5kelas8', [Bab5Controller::class, 'index8'])->name('bab5kelas8');
    Route::get('/bab6kelas8', [Bab6Controller::class, 'index8'])->name('bab6kelas8');
    Route::get('/bab7kelas8', [Bab7Controller::class, 'index8'])->name('bab7kelas8');
    Route::get('/bab8kelas8', [Bab8Controller::class, 'index8'])->name('bab8kelas8');
});

Route::middleware('auth', 'kelas9')->group(function (){
    Route::get('/materikelas9', [MateriController::class, 'index9'])->name('materikelas9');
    Route::get('/kreditkelas9', [KreditController::class, 'index9'])->name('kreditkelas9');
    Route::get('/bab1kelas9', [Bab1Controller::class, 'index9'])->name('bab1kelas9');
    Route::get('/bab2kelas9', [Bab2Controller::class, 'index9'])->name('bab2kelas9');
    Route::get('/bab3kelas9', [Bab3Controller::class, 'index9'])->name('bab3kelas9');
    Route::get('/bab4kelas9', [Bab4Controller::class, 'index9'])->name('bab4kelas9');
    Route::get('/bab5kelas9', [Bab5Controller::class, 'index9'])->name('bab5kelas9');
    Route::get('/bab6kelas9', [Bab6Controller::class, 'index9'])->name('bab6kelas9');
});




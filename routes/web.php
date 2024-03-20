<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', GuestHomeController::class)->name('guest.home');


Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    //rotta admin home
    Route::get('', AdminHomeController::class)->name('home');
    //rotte cestino
    Route::get('/projects/trash', [ProjectController::class, 'trash'])->name('projects.trash');
    Route::patch('/projects/{project}/restore', [ProjectController::class, 'restore'])->name('projects.restore')->withTrashed();
    Route::delete('/projects/{project}/drop', [ProjectController::class, 'drop'])->name('projects.drop')->withTrashed();


    //rotte resource project
    Route::resource('/projects', ProjectController::class);
});




//rotte auth

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

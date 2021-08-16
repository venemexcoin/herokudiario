<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

   Route::get('/',HomeComponent::class)->name('index');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// For User or Customer 

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});


// For Admmin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
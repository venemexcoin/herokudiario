<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\BotonNeonComponent;

use App\Http\Livewire\General\UserMenuUnoComponent;

use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCompletaComponent;
use App\Http\Livewire\Admin\AdminAddCompletaComponent;



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
   Route::get('boton-neon',BotonNeonComponent::class)->name('boton-neon');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


//Uso general
Route::get('/general/menuuno',UserMenuUnoComponent::class)->name('general.uno');

// For User or Customer 

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});


// For Admmin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/completa/add', AdminAddCompletaComponent::class)->name('admin.addcompleta');
    Route::get('/admin/completa', AdminCompletaComponent::class)->name('admin.completa');
});
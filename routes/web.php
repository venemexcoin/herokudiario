<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomeComponent;

use App\Http\Livewire\General\UserMenuUnoComponent;
use App\Http\Livewire\General\PagComplit\SlitVideoComponent;
use App\Http\Livewire\General\PagComplit\ScrollmagicComponent;
use App\Http\Livewire\General\PagComplit\ParallaxComponent;
use App\Http\Livewire\General\PagComplit\CardHoverComponent;
use App\Http\Livewire\General\PagComplit\CharacterlimitComponent;
use App\Http\Livewire\General\PagComplit\CreativeMenuComponent;
use App\Http\Livewire\General\PagComplit\CurrencyComponent;
use App\Http\Livewire\General\PagComplit\CreateTabComponent;
use App\Http\Livewire\General\PagComplit\FacebookAppComponent;
use App\Http\Livewire\General\PagComplit\DynamicClockComponent;
use App\Http\Livewire\General\PagComplit\GlossmorphismComponent;
use App\Http\Livewire\General\PagComplit\GridFlexComponent;
use App\Http\Livewire\General\PagComplit\SpeechConverterComponent;
use App\Http\Livewire\General\PagComplit\RippedPaperComponent;
use App\Http\Livewire\General\PagComplit\KeyboardComponent;



use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCompletaComponent;
use App\Http\Livewire\Admin\AdminAddCompletaComponent;
use App\Http\Livewire\Admin\AdminEditCompletaComponent;

use App\Http\Livewire\Prueba\HomePruebaComponent;
use App\Http\Livewire\Prueba\BarraProgresoComponent;
use App\Http\Livewire\Prueba\ApiCriptoComponent;



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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
 })->name('dashboard');


//Uso general
Route::get('/general/menuuno',UserMenuUnoComponent::class)->name('general.uno');
Route::get('/general/slitvideo',SlitVideoComponent::class)->name('general.slitvideo');
Route::get('/general/scrollmagic',ScrollmagicComponent::class)->name('general.scrollmagic');
Route::get('/general/parallax', ParallaxComponent::class)->name('general.parallax');
Route::get('/general/cardhover', CardHoverComponent::class)->name('general.cardhover');
Route::get('/prueba/apicripto', ApiCriptoComponent::class)->name('prueba.apicripto');
Route::get('/general/character',CharacterlimitComponent::class)->name('general.character');
Route::get('/general/creativemenu',CreativeMenuComponent::class)->name('general.creativemenu');
Route::get('/general/currency', CurrencyComponent::class)->name('general.currency');
Route::get('/general/createtab', CreateTabComponent::class)->name('general.createtab');
Route::get('/general/facebooapp', FacebookAppComponent::class)->name('general.facebookapp');
Route::get('/general/dynamicclock', DynamicClockComponent::class)->name('general.dynamicclock');
Route::get('/general/glossmorphism', GlossmorphismComponent::class)->name('general.glossmorphism');
Route::get('/general/gridflex', GridFlexComponent::class)->name('general.gridflex');
Route::get('/general/speerch/converter', SpeechConverterComponent::class)->name('general.speerchconverter');
Route::get('/general/rippedpaper', RippedPaperComponent::class)->name('general.rippedpaper');
Route::get('/general/KeyboardComponent', KeyboardComponent::class)->name('general.KeyboardComponent');

// For User or Customer

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});


// For Admmin

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/completa/add', AdminAddCompletaComponent::class)->name('admin.addcompleta');
    Route::get('/admin/completa', AdminCompletaComponent::class)->name('admin.completa');
    Route::get('/admin/completa/edit/{complit_id}', AdminEditCompletaComponent::class)->name('admin.editcompleta');

    Route::get('/prueba/home', HomePruebaComponent::class)->name('prueba.home');
    Route::get('/prueba/progresobar', BarraProgresoComponent::class)->name('prueba.progresobar');
});

<?php

use App\Http\Livewire\Admin\AdminAddMarketComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditMarketComponent;
use App\Http\Livewire\Admin\AdminMarketComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserShopComponent;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomeComponent::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::get('/shop',UserShopComponent::class)->name('user.Shop');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //user route
    Route::get('/user/shop', UserShopComponent::class)->name('user.Shop');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {

    //admin route
    Route::get('/admin/admindashboard', AdminDashboardComponent::class)->name('admin.dasboard');
    Route::get('/admin/market', AdminMarketComponent::class)->name('admin.market');
    Route::get('/admin/addmarket', AdminAddMarketComponent::class)->name('admin.addMarket');
    Route::get('/admin/editmarket/{id}', AdminEditMarketComponent::class)->name('admin.editMarket');
});

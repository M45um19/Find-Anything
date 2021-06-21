<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
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
    Route::get('/user/shop', UserShopComponent::class)->name('user.Shop');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/admindashboard', AdminDashboardComponent::class)->name('admin.dasboard');
});

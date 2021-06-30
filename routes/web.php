<?php

use App\Http\Livewire\Admin\AdminAddMarketComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditMarketComponent;
use App\Http\Livewire\Admin\AdminMarketComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductDetailsComponent;
use App\Http\Livewire\User\UserAddProducts;
use App\Http\Livewire\User\UserAddShopDetails;
use App\Http\Livewire\User\UserEditShopComponent;
use App\Http\Livewire\User\UserMarketSelect;
use App\Http\Livewire\User\UserProductEdit;
use App\Http\Livewire\User\UserProducts;
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
Route::get('/productDetails/{product_id}', ProductDetailsComponent::class)->name('details');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::get('/shop',UserShopComponent::class)->name('user.Shop');
// });

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //----USER ROUTE-----
    Route::get('/user/marketselect', UserMarketSelect::class)->name('user.marketSelect');

    //shop---
    Route::get('/user/shop', UserShopComponent::class)->name('user.Shop');
    Route::get('/user/addshopdetails/{id}', UserAddShopDetails::class)->name('user.addShopDetails');
    Route::get('/user/shopEdit/{id}', UserEditShopComponent::class)->name('user.shopEdit');

    //product---
    Route::get('/user/products', UserProducts::class)->name('user.product');
    Route::get('/user/addproduct', UserAddProducts::class)->name('user.addProduct');
    Route::get('/user/editproduct/{id}', UserProductEdit::class)->name('user.editProduct');
    //Route::get('/user/deleteproduct/{id}', UserProducts::class)->name('user.deleteProduct');
});

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {

    //admin route
    Route::get('/admin/admindashboard', AdminDashboardComponent::class)->name('admin.dasboard');
    Route::get('/admin/market', AdminMarketComponent::class)->name('admin.market');
    Route::get('/admin/addmarket', AdminAddMarketComponent::class)->name('admin.addMarket');
    Route::get('/admin/editmarket/{id}', AdminEditMarketComponent::class)->name('admin.editMarket');
});

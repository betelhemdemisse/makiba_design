<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\contract_worksController;
use App\Http\Controllers\design_and_construction_Controller;
use App\Http\Controllers\furnituresController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;
use App\Http\Middleware\PreventBackHistory;

/*
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
Auth::routes();
       
    Route::prefix('makiba/design_and_construction')->name('admin.')->group(function(){
     
      Route::group(['middleware' =>[ 'preventBackHistory']],function () {
      Route::post('/change_image', [AdminController::class, 'change_home_image'])->name('change_image');
      Route::post('/change_portfolio_image', [AdminController::class, 'change_portfolio_image'])->name('change_portfolio_image');
      Route::post('/change_contract_image', [AdminController::class, 'change_contract_image'])->name('change_contract_image');
      Route::post('/change_furnitures_image', [AdminController::class, 'change_furnitures_image'])->name('change_furnitures_image');
      Route::post('/change_design_and_construction_image', [AdminController::class, 'change_design_and_construction_image'])->name('change_design_and_construction_image');
      Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
      Route::get('/home', [AdminController::class, 'home'])->name('home');
     
        
        Route::get('/login/admin', [AdminController::class, 'index'])->name('login');
        Route::post('/login/admin', [AdminController::class, 'login'])->name('check'); 
        Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('portfolio');
        Route::get('/contract/works', [AdminController::class, 'contractworks'])->name('work');
        Route::get('/metal', [AdminController::class, 'metal_works'])->name('metal');
        Route::get('/gybsum', [AdminController::class, 'gybsum_works'])->name('gybsum');
        Route::get('/sanitary', [AdminController::class, 'sanitary_works'])->name('sanitary');
        Route::get('/electrical', [AdminController::class, 'electrical_works'])->name('electrical');
        Route::get('/Furnitures', [AdminController::class, 'Furnitures'])->name('Furnitures');
        Route::get('/Order_Custom_Makiba_Furnitures', [AdminController::class, 'Order_Custom_Makiba_Furnitures'])->name('Order_Custom_Makiba_Furnitures');
        Route::get('/Sofa', [AdminController::class, 'Sofa'])->name('Sofa');
        Route::get('/Bed', [AdminController::class, 'Bed'])->name('Bed');
        Route::get('/Wardrop', [AdminController::class, 'Wardrop'])->name('Wardrop');
        Route::get('/Dinning_Table', [AdminController::class, 'Dinning_Table'])->name('Dinning_Table');
        Route::get('/Tv_Stand', [AdminController::class, 'Tv_Stand'])->name('Tv_Stand');
        Route::get('/Coffee_table', [AdminController::class, 'Coffee_table'])->name('Coffee_table');
        Route::get('/Shelf', [AdminController::class, 'Shelf'])->name('Shelf');
        Route::get('/Office_Table', [AdminController::class, 'Office_Table'])->name('Office_Table');
        Route::get('/Kitchen_Cabinet', [AdminController::class, 'Kitchen_Cabinet'])->name('Kitchen_Cabinet');
        
        Route::get('/Residential_Design', [AdminController::class, 'Residential_Design'])->name('Residential_Design');
        Route::get('/Commercial_Design', [AdminController::class, 'Commercial_Design'])->name('Commercial_Design');
        Route::get('/3D_Modeling_Rendering', [AdminController::class, 'Modeling_Rendering'])->name('3D_Modeling_Rendering');
        Route::get('/design_and_construction', [AdminController::class, 'construction'])->name('design_and_construction');
     
        Route::get('/contact', [AdminController::class, 'contact'])->name('contact'); 
        Route::get('/setting/change', [AdminController::class, 'setting'])->name('setting');
        Route::post('/setting/change', [AdminController::class, 'change'])->name('change');
  });
    });
  
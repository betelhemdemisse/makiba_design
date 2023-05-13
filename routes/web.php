<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\contract_worksController;
use App\Http\Controllers\design_and_construction_Controller;
use App\Http\Controllers\furnituresController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin1Controller;

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

// Route::get('/home', function () {
//     return view('welcome');
// });
//http://localhost:8004/makiba/design_and_construction
Auth::routes();
Route::get('/', [HomePageController::class, 'home'])->name('user.home');
       // Route::prefix('makiba/design_and_construction')->group(function(){

        Route::get('/login/admin', [AdminController::class, 'index'])->name('user.login');
        Route::get('/portfolio', [HomePageController::class, 'portfolio'])->name('users.portfolio');
        Route::get('/contract_works', [contract_worksController::class, 'contractworks'])->name('user.contract');
        Route::get('/metal', [contract_worksController::class, 'metal_works'])->name('user.metal');
        Route::get('/gybsum', [contract_worksController::class, 'gybsum_works'])->name('user.gybsum');
        Route::get('/sanitary', [contract_worksController::class, 'sanitary_works'])->name('user.sanitary');
        Route::get('/electrical', [contract_worksController::class, 'electrical_works'])->name('user.electrical');
        Route::get('/Furnitures', [furnituresController::class, 'Furnitures'])->name('user.Furnitures');
        Route::get('/Order_Custom_Makiba_Furnitures', [furnituresController::class, 'Order_Custom_Makiba_Furnitures'])->name('user.Order_Custom_Makiba_Furnitures');
        Route::get('/Sofa', [furnituresController::class, 'Sofa'])->name('user.Sofa');
        Route::get('/Bed', [furnituresController::class, 'Bed'])->name('user.Bed');
        Route::get('/Wardrop', [furnituresController::class, 'Wardrop'])->name('user.Wardrop');
        Route::get('/Dinning_Table', [furnituresController::class, 'Dinning_Table'])->name('user.Dinning_Table');
        Route::get('/Tv_Stand', [furnituresController::class, 'Tv_Stand'])->name('user.Tv_Stand');
        Route::get('/Coffee_table', [furnituresController::class, 'Coffee_table'])->name('user.Coffee_table');
        Route::get('/Shelf', [furnituresController::class, 'Shelf'])->name('user.Shelf');
        Route::get('/Office_Table', [furnituresController::class, 'Office_Table'])->name('user.Office_Table');
        Route::get('/Kitchen_Cabinet', [furnituresController::class, 'Kitchen_Cabinet'])->name('user.Kitchen_Cabinet');
        Route::get('/Residential_Design', [design_and_construction_Controller::class, 'Residential_Design'])->name('user.Residential_Design');
        Route::get('/Commercial_Design', [design_and_construction_Controller::class, 'Commercial_Design'])->name('user.Commercial_Design');
        Route::get('/3D_Modeling_Rendering', [design_and_construction_Controller::class, 'Modeling_Rendering'])->name('user.3D_Modeling_Rendering');
        Route::get('/design_and_construction', [design_and_construction_Controller::class, 'design_and_construction'])->name('user.design_and_construction');
        
        Route::get('/contact', [HomePageController::class, 'contact'])->name('user.contact');
      
   // });
    Route::prefix('makiba/design_and_construction')->name('admin.')->group(function(){
       Route::get('/login/admin', [AdminController::class, 'index'])->name('login');
       Route::post('/login/admin', [AdminController::class, 'login'])->name('check');
       Route::middleware(['auth:admin'])->group(function(){
        Route::get('admin/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('portfolio');
        Route::get('home', [AdminController::class, 'home'])->name('home');
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
        Route::post('/change_image', [AdminController::class, 'change_home_image'])->name('change_image');
        Route::post('/change_portfolio_image', [AdminController::class, 'change_portfolio_image'])->name('change_portfolio_image');
        Route::post('/change_contract_image', [AdminController::class, 'change_contract_image'])->name('change_contract_image');
        Route::post('/change_furnitures_image', [AdminController::class, 'change_furnitures_image'])->name('change_furnitures_image');
        Route::post('/change_design_and_construction_image', [AdminController::class, 'change_design_and_construction_image'])->name('change_design_and_construction_image');
        
        Route::get('/contact', [AdminController::class, 'contact'])->name('contact'); 
  });
        
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

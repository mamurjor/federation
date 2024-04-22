<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\CastController;
use App\Http\Controllers\VerifyUserController;
use App\Http\Controllers\Admin\GenderController;
use App\Http\Controllers\Admin\TehsilController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\SliersectionController;
use App\Http\Controllers\Frontend\MainIndexController;
use App\Http\Controllers\Admin\MissionSectionController;

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
Auth::routes([
    'register'         => false,
    'verify'           => false,
    'password.reset'   => false,
    'password.update'  => false,
    'password.email'   => false,
    'password.request' => false
]);
Route::get('/',[MainIndexController::class,'index'])->name('index');

//------------ Register Route ------------//
Route::get('register', [AuthController::class, 'index'])->name('user.register');
Route::get('user-update', [AuthController::class, 'userUpdate'])->name('user.update');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register/store', [AuthController::class, 'store'])->name('user.register.store');
Route::post('register/update', [AuthController::class, 'updateuser'])->name('user.register.update');


Route::get('index', [CountryController::class, 'index'])->name('country.index');
Route::get('create', [CountryController::class, 'create'])->name('country.create');
Route::post('store', [CountryController::class, 'store'])->name('country.store');
Route::post('update', [CountryController::class, 'update'])->name('country.update');
Route::get('edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
Route::get('countrydelete/{id}', [CountryController::class, 'delete'])->name('country.delete');



Route::get('cast/index', [CastController::class, 'index'])->name('cast.index');
Route::get('cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('cast/store', [CastController::class, 'store'])->name('cast.store');
Route::post('cast/update', [CastController::class, 'update'])->name('cast.update');
Route::get('cast/edit/{id}', [CastController::class, 'edit'])->name('cast.edit');
Route::get('cast/countrydelete/{id}', [CastController::class, 'delete'])->name('cast.delete');


Route::get('gender/index', [GenderController::class, 'index'])->name('gender.index');
Route::get('gender/create', [GenderController::class, 'create'])->name('gender.create');
Route::post('gender/store', [GenderController::class, 'store'])->name('gender.store');
Route::post('gender/update', [GenderController::class, 'update'])->name('gender.update');
Route::get('gender/edit/{id}', [GenderController::class, 'edit'])->name('gender.edit');
Route::get('gender/countrydelete/{id}', [GenderController::class, 'delete'])->name('gender.delete');


Route::get('profession/index', [ProfessionController::class, 'index'])->name('profession.index');
Route::get('profession/create', [ProfessionController::class, 'create'])->name('profession.create');
Route::post('profession/store', [ProfessionController::class, 'store'])->name('profession.store');
Route::post('profession/update', [ProfessionController::class, 'update'])->name('profession.update');
Route::get('profession/edit/{id}', [ProfessionController::class, 'edit'])->name('profession.edit');
Route::get('profession/countrydelete/{id}', [ProfessionController::class, 'delete'])->name('profession.delete');


Route::get('tehsil/index', [TehsilController::class, 'index'])->name('tehsil.index');
Route::get('tehsil/getcountry/{country}', [TehsilController::class, 'getcountry'])->name('tehsil.getcountry');
Route::get('tehsil/create', [TehsilController::class, 'create'])->name('tehsil.create');
Route::post('tehsil/store', [TehsilController::class, 'store'])->name('tehsil.store');
Route::post('tehsil/update', [TehsilController::class, 'update'])->name('tehsil.update');
Route::get('tehsil/edit/{id}', [TehsilController::class, 'edit'])->name('tehsil.edit');
Route::get('tehsil/countrydelete/{id}', [TehsilController::class, 'delete'])->name('tehsil.delete');




Route::get('herosection/index', [HeroSectionController::class, 'index'])->name('herosection.index');
Route::get('herosection/create', [HeroSectionController::class, 'create'])->name('herosection.create');
Route::post('herosection/store', [HeroSectionController::class, 'store'])->name('herosection.store');
Route::post('herosection/update', [HeroSectionController::class, 'update'])->name('herosection.update');
Route::get('herosection/edit/{id}', [HeroSectionController::class, 'edit'])->name('herosection.edit');
Route::get('herosection/countrydelete/{id}', [HeroSectionController::class, 'delete'])->name('herosection.delete');

Route::get('missionsection/index', [MissionSectionController::class, 'index'])->name('missionsection.index');
Route::get('missionsection/create', [MissionSectionController::class, 'create'])->name('missionsection.create');
Route::post('missionsection/store', [MissionSectionController::class, 'store'])->name('missionsection.store');
Route::post('missionsection/update', [MissionSectionController::class, 'update'])->name('missionsection.update');
Route::get('missionsection/edit/{id}', [MissionSectionController::class, 'edit'])->name('missionsection.edit');
Route::get('missionsection/countrydelete/{id}', [MissionSectionController::class, 'delete'])->name('missionsection.delete');



Route::get('sliersection/index', [SliersectionController::class, 'index'])->name('sliersection.index');
Route::get('sliersection/create', [SliersectionController::class, 'create'])->name('sliersection.create');
Route::post('sliersection/store', [SliersectionController::class, 'store'])->name('sliersection.store');
Route::post('sliersection/update', [SliersectionController::class, 'update'])->name('sliersection.update');
Route::get('sliersection/edit/{id}', [SliersectionController::class, 'edit'])->name('sliersection.edit');
Route::get('sliersection/countrydelete/{id}', [SliersectionController::class, 'delete'])->name('sliersection.delete');


Route::get('district/index', [DistrictController::class, 'index'])->name('district.index');
Route::get('district/create', [DistrictController::class, 'create'])->name('district.create');
Route::post('district/store', [DistrictController::class, 'store'])->name('district.store');
Route::post('district/update', [DistrictController::class, 'update'])->name('district.update');
Route::get('district/edit/{id}', [DistrictController::class, 'edit'])->name('district.edit');
Route::get('district/countrydelete/{id}', [DistrictController::class, 'delete'])->name('district.delete');







//------------ Varify User ------------//
Route::get('verify-code/{token}',[VerifyUserController::class,'verifiedCode'])->name('verify.code');



//------------ Home Page Route ------------//

Route::get('country/{country}', [CountryController::class, 'GetuserBycontry'])->name('country.list');

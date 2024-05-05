<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ExcelCSVController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\CastController;
use App\Http\Controllers\VerifyUserController;
use App\Http\Controllers\Admin\GenderController;
use App\Http\Controllers\Admin\TehsilController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\admin\BillingController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\UserOperationController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\CompanysettingController;
use App\Http\Controllers\admin\ClassifiedController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\admin\MatromonialController;
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
Route::get("get/registeruser",[UserOperationController::class,'getregisteruser'])->name('get.registeruser');

Route::get('get/approved/{userid}', [UserOperationController::class, 'approved'])->name('user.approved');
Route::get('get/cancel/{userid}', [UserOperationController::class, 'cancel'])->name('user.cancel');

// Company Setting 
Route::get('company/setting',[CompanysettingController::class,'companysettingform'])->name('company.setting');
Route::post('company/setting/save',[CompanysettingController::class,'companysetting'])->name('company.setting.save');
Route::post('company/setting/header',[CompanysettingController::class,'companysettingheader'])->name('company.setting.header');
Route::post('company/setting/footer',[CompanysettingController::class,'companysettingfooter'])->name('company.setting.footer');




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
Route::get('tehsil/getdistrict/{country}', [TehsilController::class, 'getdistrict'])->name('tehsil.getdistrict');
Route::get('tehsil/gettehsil/{district}', [TehsilController::class, 'gettehsil'])->name('tehsil.gettehsil');
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


// Route::get('index', [CountryController::class, 'index']);
Route::post('import-excel-csv-file-country', [ExcelCSVController::class, 'importExcelCSVCountry']);
Route::post('import-excel-csv-file-district', [ExcelCSVController::class, 'importExcelCSVDistrict']);
Route::post('import-excel-csv-file-tehsil', [ExcelCSVController::class, 'importExcelCSVTehsil']);
Route::get('export-excel-csv-file/{slug}', [ExcelCSVController::class, 'exportExcelCSV']);


Route::get('settings/index', [SettingsController::class, 'settingsform'])->name('settings.index');
Route::get('billing/index', [BillingController::class, 'billingform'])->name('billing.index');

Route::get('classified/indexforadmin', [ClassifiedController::class, 'indexforadmin'])->name('classified.indexforadmin');
Route::post('classified/approve/{id}', [ClassifiedController::class, 'approve'])->name('classified.approve');

Route::get('classified/index', [ClassifiedController::class, 'index'])->name('classified.index');
Route::get('classified/create', [ClassifiedController::class, 'classifiedform'])->name('classified.create');
Route::post('classified/store', [ClassifiedController::class, 'store'])->name('classified.store');
Route::post('classified/update', [ClassifiedController::class, 'update'])->name('classified.update');
Route::get('classified/edit/{id}', [ClassifiedController::class, 'edit'])->name('classified.edit');
Route::get('classified/delete/{id}', [ClassifiedController::class, 'delete'])->name('classified.delete');

Route::get('classifiedcategory/index', [ClassifiedController::class, 'categoryindex'])->name('classifiedcategory.index');
Route::get('classifiedcategory/create', [ClassifiedController::class, 'categorycreate'])->name('classifiedcategory.create');
Route::post('classifiedcategory/store', [ClassifiedController::class, 'categorystore'])->name('classifiedcategory.store');
Route::post('classifiedcategory/update', [ClassifiedController::class, 'categoryupdate'])->name('classifiedcategory.update');
Route::get('classifiedcategory/edit/{id}', [ClassifiedController::class, 'categoryedit'])->name('classifiedcategory.edit');
Route::get('classifiedcategory/delete/{id}', [ClassifiedController::class, 'categorydelete'])->name('classifiedcategory.delete');

Route::get('classifiedall',[MainIndexController::class,'classified'])->name('classified');
Route::get('classifiedaddsingle/{id}',[MainIndexController::class,'classifiedaddsingle'])->name('classified.single');


Route::get('matromonial/indexforadmin', [MatromonialController::class, 'indexforadmin'])->name('matromonial.indexforadmin');
Route::post('matromonial/approve/{id}', [MatromonialController::class, 'approve'])->name('matromonial.approve');

Route::get('matromonial/index', [MatromonialController::class, 'index'])->name('matromonial.index');
Route::get('matromonial/create', [MatromonialController::class, 'matromonialform'])->name('matromonial.create');
Route::post('matromonial/store', [MatromonialController::class, 'store'])->name('matromonial.store');
Route::post('matromonial/update', [MatromonialController::class, 'update'])->name('matromonial.update');
Route::get('matromonial/edit/{id}', [MatromonialController::class, 'edit'])->name('matromonial.edit');
Route::get('matromonial/delete/{id}', [MatromonialController::class, 'delete'])->name('matromonial.delete');

Route::get('matromonialall',[MainIndexController::class,'matromonial'])->name('matromonial');
Route::get('matromonialsingle/{id}',[MainIndexController::class,'matromonialsingle'])->name('matromonial.single');


Route::get('matromonialreligion/index', [MatromonialController::class, 'religionindex'])->name('matromonialreligion.index');
Route::get('matromonialreligion/create', [MatromonialController::class, 'religioncreate'])->name('matromonialreligion.create');
Route::post('matromonialreligion/store', [MatromonialController::class, 'religionstore'])->name('matromonialreligion.store');
Route::post('matromonialreligion/update', [MatromonialController::class, 'religionupdate'])->name('matromonialreligion.update');
Route::get('matromonialreligion/edit/{id}', [MatromonialController::class, 'religionedit'])->name('matromonialreligion.edit');
Route::get('matromonialreligion/delete/{id}', [MatromonialController::class, 'religiondelete'])->name('matromonialreligion.delete');

Route::get('matromonialmarital/index', [MatromonialController::class, 'maritalindex'])->name('matromonialmarital.index');
Route::get('matromonialmarital/create', [MatromonialController::class, 'maritalcreate'])->name('matromonialmarital.create');
Route::post('matromonialmarital/store', [MatromonialController::class, 'maritalstore'])->name('matromonialmarital.store');
Route::post('matromonialmarital/update', [MatromonialController::class, 'maritalupdate'])->name('matromonialmarital.update');
Route::get('matromonialmarital/edit/{id}', [MatromonialController::class, 'maritaledit'])->name('matromonialmarital.edit');
Route::get('matromonialmarital/delete/{id}', [MatromonialController::class, 'maritaldelete'])->name('matromonialmarital.delete');

Route::get('votetype/index', [VoteController::class, 'voteindex'])->name('votetype.index');
Route::get('votetype/create', [VoteController::class, 'votecreate'])->name('votetype.create');
Route::post('votetype/store', [VoteController::class, 'votestore'])->name('votetype.store');
Route::post('votetype/update', [VoteController::class, 'voteupdate'])->name('votetype.update');
Route::get('votetype/edit/{id}', [VoteController::class, 'voteedit'])->name('votetype.edit');
Route::get('votetype/delete/{id}', [VoteController::class, 'votedelete'])->name('votetype.delete');

Route::get('votepositiontype/index', [VoteController::class, 'votepositionindex'])->name('votepositiontype.index');
Route::get('votepositiontype/create', [VoteController::class, 'votepositioncreate'])->name('votepositiontype.create');
Route::post('votepositiontype/store', [VoteController::class, 'votepositionstore'])->name('votepositiontype.store');
Route::post('votepositiontype/update', [VoteController::class, 'votepositionupdate'])->name('votepositiontype.update');
Route::get('votepositiontype/edit/{id}', [VoteController::class, 'votepositionedit'])->name('votepositiontype.edit');
Route::get('votepositiontype/delete/{id}', [VoteController::class, 'votepositiondelete'])->name('votepositiontype.delete');


Route::get('voteannounce/index', [VoteController::class, 'voteannounceindex'])->name('voteannounce.index');
Route::get('voteannounce/create', [VoteController::class, 'voteannouncecreate'])->name('voteannounce.create');
Route::post('voteannounce/store', [VoteController::class, 'voteannouncestore'])->name('voteannounce.store');
Route::post('voteannounce/update', [VoteController::class, 'voteannounceupdate'])->name('voteannounce.update');
Route::get('voteannounce/edit/{id}', [VoteController::class, 'voteannounceedit'])->name('voteannounce.edit');
Route::get('voteannounce/delete/{id}', [VoteController::class, 'voteannouncedelete'])->name('voteannounce.delete');


// Notification 

Route::post('notifications/mark-as-read/{id}', NotificationController::class, 'markAsRead')->name('notifications.markAsRead');
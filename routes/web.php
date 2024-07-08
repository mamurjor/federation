<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\WingsController;
use App\Http\Controllers\NominiController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExcelCSVController;
use App\Http\Controllers\AllNotifiController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\CastController;
use App\Http\Controllers\VerifyUserController;
use App\Http\Controllers\Admin\GenderController;
use App\Http\Controllers\Admin\TehsilController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Admin\BillingController;
use App\Http\Controllers\UserOperationController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\CompanysettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ClassifiedController;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\MatromonialController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\Admin\SliersectionController;
use App\Http\Controllers\Frontend\MainIndexController;
use App\Http\Controllers\Admin\InternationalController;
use App\Http\Controllers\Admin\MissionSectionController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;

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
Route::get('/tehsil/show/{tehsil}', [MainIndexController::class, 'showTehsil'])->name('tehsil.show');
Route::get('/wings/show', [MainIndexController::class, 'showwings'])->name('wings.show');
Route::get('/members', [MainIndexController::class, 'member'])->name('member');

//------------ Register Route ------------//
Route::get('register', [AuthController::class, 'index'])->name('user.register');
Route::get('user-update', [AuthController::class, 'userUpdate'])->name('user.update');
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register/store', [AuthController::class, 'store'])->name('user.register.store');
Route::post('register/update', [AuthController::class, 'updateuser'])->name('user.register.update');

// forget password 

Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');


Route::get("get/registeruser",[UserOperationController::class,'getregisteruser'])->name('get.registeruser');

Route::get('get/approved/{userid}', [UserOperationController::class, 'approved'])->name('user.approved');
Route::get('get/cancel/{userid}', [UserOperationController::class, 'cancel'])->name('user.cancel');

// Company Setting 
Route::get('company/setting',[CompanysettingController::class,'companysettingform'])->name('company.setting');
Route::get('header/setting',[CompanysettingController::class,'companyheader'])->name('company.setting.header.show');
Route::get('footer/setting',[CompanysettingController::class,'companyfooter'])->name('footer.show');
Route::get('pagesetting/setting',[CompanysettingController::class,'companypagesetting'])->name('pagesettings.show');
Route::get('contact/setting',[CompanysettingController::class,'companycontact'])->name('contact.show');
Route::get('president/setting',[CompanysettingController::class,'companypresident'])->name('president.show');
Route::get('blog/setting',[CompanysettingController::class,'companyblog'])->name('blog.show');
Route::get('join/setting',[CompanysettingController::class,'companyjoin'])->name('join.show');
Route::get('classified/setting',[CompanysettingController::class,'companyclassified'])->name('classified.show');
Route::get('faq/setting',[CompanysettingController::class,'companyfaq'])->name('faq.show');
Route::get('matromonial/setting',[CompanysettingController::class,'companymatromonial'])->name('matromonial.show');


Route::post('company/setting/save',[CompanysettingController::class,'companysetting'])->name('company.setting.save');
Route::post('company/setting/header',[CompanysettingController::class,'companysettingheader'])->name('company.setting.header');
Route::post('company/setting/footer',[CompanysettingController::class,'companysettingfooter'])->name('company.setting.footer');
Route::post('company/setting/contact',[CompanysettingController::class,'companysettingcontact'])->name('company.setting.contact');
Route::post('company/setting/president',[CompanysettingController::class,'companysettingpresident'])->name('company.setting.president');
Route::post('company/setting/blog',[CompanysettingController::class,'companysettingblog'])->name('company.setting.blog');
Route::post('company/setting/joinus',[CompanysettingController::class,'companysettingjoinus'])->name('company.setting.joinus');
Route::post('company/setting/classified',[CompanysettingController::class,'companysettingclassified'])->name('company.setting.classified');
Route::post('company/setting/matro',[CompanysettingController::class,'companysettingmatro'])->name('company.setting.matro');
Route::post('company/setting/faq',[CompanysettingController::class,'companysettingfaq'])->name('company.setting.faq');






Route::get('divisions', [DivisionController::class, 'index'])->name('divisions.index');
Route::get('divisions/create', [DivisionController::class, 'create'])->name('divisions.create');
Route::post('divisions/store', [DivisionController::class, 'store'])->name('divisions.store');
Route::post('divisions/update', [DivisionController::class, 'update'])->name('divisions.update');
Route::get('divisions/edit/{id}', [DivisionController::class, 'edit'])->name('divisions.edit');
Route::get('divisions/delete/{id}', [DivisionController::class, 'delete'])->name('divisions.delete');



Route::get('index', [InternationalController::class, 'index'])->name('international.index');
Route::get('create', [InternationalController::class, 'create'])->name('international.create');
Route::post('store', [InternationalController::class, 'store'])->name('international.store');
Route::post('update', [InternationalController::class, 'update'])->name('international.update');
Route::get('edit/{id}', [InternationalController::class, 'edit'])->name('international.edit');
Route::get('internationaldelete/{id}', [InternationalController::class, 'delete'])->name('international.delete');



Route::get('cast/index', [CastController::class, 'index'])->name('cast.index');
Route::get('cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('cast/store', [CastController::class, 'store'])->name('cast.store');
Route::post('cast/update', [CastController::class, 'update'])->name('cast.update');
Route::get('cast/edit/{id}', [CastController::class, 'edit'])->name('cast.edit');
Route::get('cast/Divisiondelete/{id}', [CastController::class, 'delete'])->name('cast.delete');


Route::get('gender/index', [GenderController::class, 'index'])->name('gender.index');
Route::get('gender/create', [GenderController::class, 'create'])->name('gender.create');
Route::post('gender/store', [GenderController::class, 'store'])->name('gender.store');
Route::post('gender/update', [GenderController::class, 'update'])->name('gender.update');
Route::get('gender/edit/{id}', [GenderController::class, 'edit'])->name('gender.edit');
Route::get('gender/Divisiondelete/{id}', [GenderController::class, 'delete'])->name('gender.delete');


Route::get('profession/index', [ProfessionController::class, 'index'])->name('profession.index');
Route::get('profession/create', [ProfessionController::class, 'create'])->name('profession.create');
Route::post('profession/store', [ProfessionController::class, 'store'])->name('profession.store');
Route::post('profession/update', [ProfessionController::class, 'update'])->name('profession.update');
Route::get('profession/edit/{id}', [ProfessionController::class, 'edit'])->name('profession.edit');
Route::get('profession/Divisiondelete/{id}', [ProfessionController::class, 'delete'])->name('profession.delete');

Route::get('wings/index', [WingsController::class, 'index'])->name('wings.index');
Route::get('wings/create', [WingsController::class, 'create'])->name('wings.create');
Route::post('wings/store', [WingsController::class, 'store'])->name('wings.store');
Route::post('wings/update', [WingsController::class, 'update'])->name('wings.update');
Route::get('wings/edit/{id}', [WingsController::class, 'edit'])->name('wings.edit');
Route::get('wings/Divisiondelete/{id}', [WingsController::class, 'delete'])->name('wings.delete');


Route::get('tehsil/index', [TehsilController::class, 'index'])->name('tehsil.index');
Route::get('tehsil/getDivision/{Division}', [TehsilController::class, 'getDivision'])->name('tehsil.getDivision');
Route::get('tehsil/getdistrict/{Division}', [TehsilController::class, 'getdistrict'])->name('tehsil.getdistrict');
Route::get('tehsil/gettehsil/{district}', [TehsilController::class, 'gettehsil'])->name('tehsil.gettehsil');
Route::get('tehsil/create', [TehsilController::class, 'create'])->name('tehsil.create');
Route::post('tehsil/store', [TehsilController::class, 'store'])->name('tehsil.store');
Route::post('tehsil/update', [TehsilController::class, 'update'])->name('tehsil.update');
Route::get('tehsil/edit/{id}', [TehsilController::class, 'edit'])->name('tehsil.edit');
Route::get('tehsil/Divisiondelete/{id}', [TehsilController::class, 'delete'])->name('tehsil.delete');




Route::get('herosection/index', [HeroSectionController::class, 'index'])->name('herosection.index');
Route::get('herosection/create', [HeroSectionController::class, 'create'])->name('herosection.create');
Route::post('herosection/store', [HeroSectionController::class, 'store'])->name('herosection.store');
Route::post('herosection/update', [HeroSectionController::class, 'update'])->name('herosection.update');
Route::get('herosection/edit/{id}', [HeroSectionController::class, 'edit'])->name('herosection.edit');
Route::get('herosection/Divisiondelete/{id}', [HeroSectionController::class, 'delete'])->name('herosection.delete');

Route::get('user/index', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');

Route::get( 'user/active/{id}', [UserController::class, 'active'])->name('user.active');
Route::get( 'user/cancel/{id}', [UserController::class, 'cancel'])->name('user.cancel');

Route::get('missionsection/index', [MissionSectionController::class, 'index'])->name('missionsection.index');
Route::get('missionsection/create', [MissionSectionController::class, 'create'])->name('missionsection.create');
Route::post('missionsection/store', [MissionSectionController::class, 'store'])->name('missionsection.store');
Route::post('missionsection/update', [MissionSectionController::class, 'update'])->name('missionsection.update');
Route::get('missionsection/edit/{id}', [MissionSectionController::class, 'edit'])->name('missionsection.edit');
Route::get('missionsection/Divisiondelete/{id}', [MissionSectionController::class, 'delete'])->name('missionsection.delete');



Route::get('sliersection/index', [SliersectionController::class, 'index'])->name('sliersection.index');
Route::get('sliersection/create', [SliersectionController::class, 'create'])->name('sliersection.create');
Route::post('sliersection/store', [SliersectionController::class, 'store'])->name('sliersection.store');
Route::post('sliersection/update', [SliersectionController::class, 'update'])->name('sliersection.update');
Route::get('sliersection/edit/{id}', [SliersectionController::class, 'edit'])->name('sliersection.edit');
Route::get('sliersection/Divisiondelete/{id}', [SliersectionController::class, 'delete'])->name('sliersection.delete');


Route::get('district/index', [DistrictController::class, 'index'])->name('district.index');
Route::get('district/create', [DistrictController::class, 'create'])->name('district.create');
Route::post('district/store', [DistrictController::class, 'store'])->name('district.store');
Route::post('district/update', [DistrictController::class, 'update'])->name('district.update');
Route::get('district/edit/{id}', [DistrictController::class, 'edit'])->name('district.edit');
Route::get('district/Divisiondelete/{id}', [DistrictController::class, 'delete'])->name('district.delete');








//------------ Varify User ------------//
Route::get('verify-code/{token}',[VerifyUserController::class,'verifiedCode'])->name('verify.code');




Route::get('Division/{Division}', [DivisionController::class, 'GetuserBycontry'])->name('Division.list');


// Route::get('index', [DivisionController::class, 'index']);
Route::post('import-excel-csv-file-Division', [ExcelCSVController::class, 'importExcelCSVDivision']);
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


Route::get('vote/details', [VoteController::class, 'votedetails'])->name('vote.details');
Route::post('vote/result', [VoteController::class, 'voteresult'])->name('voteresult.store');

Route::get('voteclick/index', [VoteController::class, 'voteclick'])->name('voteclick.index');
Route::post('nomini/select/{nomini_id}', [VoteController::class, 'approve'])->name('nomini.select');
Route::post('wingsnomini/select/{wingsnomini_id}', [VoteController::class, 'wingsapprove'])->name('wingsnomini.select');
Route::post('disnomini/select/{disnomini_id}', [VoteController::class, 'disapprove'])->name('disnomini.select');

Route::post('nomini/cancel/{nomini_id}', [VoteController::class, 'cancel'])->name('nomini.cancel');
Route::post('wingsnomini/cancel/{wingsnomini_id}', [VoteController::class, 'wingscancel'])->name('wingsnomini.cancel');
Route::post('disnomini/cancel/{disnomini_id}', [VoteController::class, 'discancel'])->name('disnomini.cancel');

// OTP
Route::post('/send-otp', [VoteController::class, 'sendOtp'])->name('send.otp');
Route::post('/verify-otp', [VoteController::class, 'verifyOtp'])->name('verify.otp');
Route::post('/check-vote', [VoteController::class, 'checkVote'])->name('check.vote');
Route::post('/store-vote-data', [VoteController::class, 'storeVoteData'])->name('store.vote.data');
Route::post('/store-wingsvote-data', [VoteController::class, 'storewingsVoteData'])->name('store.wingsvote.data');



// Notification 

Route::post('notifications/mark-as-read/{id}', NotificationController::class, 'markAsRead')->name('notifications.markAsRead');

// Nomini 

Route::get('nomini/form/{id}', [NominiController::class, 'nominiform'])->name('nomini.form');
Route::post('nomini/store', [NominiController::class, 'noministore'])->name('nomini.store');
Route::get('nominiindex', [NominiController::class, 'nominiindex'])->name('nomini.index');
Route::post('nomini/approve/{id}', [NominiController::class, 'approve'])->name('nomini.approve');
Route::post('nomini/declined/{id}', [NominiController::class, 'declined'])->name('nomini.declined');
Route::post('nomini/delete/{id}', [NominiController::class, 'nominidelete'])->name('nomini.delete');

// Wings form 
Route::get('wingsvote/details', [VoteController::class, 'wingsvotedetails'])->name('wingsvote.details');
Route::get('wingsnomini/form/{id}', [WingsController::class, 'wingsnominiform'])->name('wingsnomini.form');
Route::post('wingsnomini/store', [WingsController::class, 'wingsnoministore'])->name('wingsnomini.store');
Route::get('wingsstripe', [WingsController::class, 'wingsstripe'])->name('wingsstripe');
Route::post('wingsstripe/post', [WingsController::class, 'wingsstripestore'])->name('wingsstripe.post');
Route::post('wingsnomini/approve/{id}', [WingsController::class, 'approve'])->name('wingsnomini.approve');
Route::post('wingsnomini/declined/{id}', [WingsController::class, 'declined'])->name('wingsnomini.declined');
Route::post('wingsnomini/delete/{id}', [WingsController::class, 'wingsnominidelete'])->name('wingsnomini.delete');

// District vote form 

Route::get('disvote/details', [VoteController::class, 'disvotedetails'])->name('disvote.details');
Route::get('disnomini/form/{id}', [DistrictController::class, 'disnominiform'])->name('disnomini.form');
Route::post('disnomini/store', [DistrictController::class, 'disnoministore'])->name('disnomini.store');
Route::get('disstripe', [DistrictController::class, 'disstripe'])->name('disstripe');
Route::post('disstripe/post', [DistrictController::class, 'disstripestore'])->name('disstripe.post');
Route::post('disnomini/approve/{id}', [DistrictController::class, 'approve'])->name('disnomini.approve');
Route::post('disnomini/declined/{id}', [DistrictController::class, 'declined'])->name('disnomini.declined');
Route::post('disnomini/delete/{id}', [DistrictController::class, 'disnominidelete'])->name('disnomini.delete');


Route::get('stripe', [NominiController::class, 'stripe'])->name('stripe');
Route::post('stripe/post', [NominiController::class, 'stripestore'])->name('stripe.post');


Route::get('/getCharge', [VoteController::class,'getCharge'])->name('getCharge');


Route::get('/getdistrictbycnic/{code}', [DistrictController::class, 'getDistrictByCode'])->name('getdistrictbycnic');
Route::get('/gettehsilbycnic/{code}', [DistrictController::class, 'getTehsilByCode'])->name('gettehsilbycnic');
Route::get('/getgenderbycnic/{code}', [DistrictController::class, 'getGenderByCode'])->name('getgenderbycnic');


// filter search Matromnial
Route::post('/getmatromonialbysearch', [MatromonialController::class,'getmatromonialbysearch'])->name('getmatromonialbysearch');
Route::get('/getTehsilData', [MatromonialController::class,'getTehsilData'])->name('getTehsilData');
Route::get('/getsorteddata', [MatromonialController::class,'getSortedData'])->name('getsorteddata');
Route::get('/getsorteddataas', [MatromonialController::class,'getSortedDataAs'])->name('getsorteddataas');
Route::get('/getProfessionData', [MatromonialController::class,'getProfessionData'])->name('getProfessionData');
Route::get('/getNameData', [MatromonialController::class,'getNameData'])->name('getNameData');
Route::get('/gettendata', [MatromonialController::class,'getTenData'])->name('gettendata');
Route::get('/gettwentydata', [MatromonialController::class,'getTwentyData'])->name('gettwentydata');


// filter search Classified
Route::get('/getTehsilClassifiedData', [ClassifiedController::class,'getTehsilClassifiedData'])->name('getTehsilClassifiedData');
Route::get('/getsortedclassifieddata', [ClassifiedController::class,'getSortedClassifiedData'])->name('getsortedclassifieddata');
Route::get('/getsortedclassifieddataas', [ClassifiedController::class,'getSortedClassifiedDataAs'])->name('getsortedclassifieddataas');

Route::get('/gettenclassifieddata', [ClassifiedController::class,'getTenClassifiedData'])->name('gettenclassifieddata');
Route::get('/gettwentyclassifieddata', [ClassifiedController::class,'getTwentyClassifiedData'])->name('gettwentyclassifieddata');

// Blog 

// Blog categories

Route::get('blogcategories/index', [BlogController::class, 'blogcategoriesindex'])->name('blogcategories.index');
Route::get('blogcategories/create', [BlogController::class, 'blogcategoriescreate'])->name('blogcategories.create');
Route::post('blogcategories/store', [BlogController::class, 'blogcategoriesstore'])->name('blogcategories.store');
Route::post('blogcategories/update', [BlogController::class, 'blogcategoriesupdate'])->name('blogcategories.update');
Route::get('blogcategories/edit/{id}', [BlogController::class, 'blogcategoriesedit'])->name('blogcategories.edit');
Route::get('blogcategories/delete/{id}', [BlogController::class, 'blogcategoriesdelete'])->name('blogcategories.delete');

// Blog post

Route::get('blogpost/index', [BlogController::class, 'blogpostindex'])->name('blogpost.index');
Route::get('blogpost/create', [BlogController::class, 'blogpostcreate'])->name('blogpost.create');
Route::post('blogpost/store', [BlogController::class, 'blogpoststore'])->name('blogpost.store');
Route::post('blogpost/update', [BlogController::class, 'blogpostupdate'])->name('blogpost.update');
Route::get('blogpost/edit/{id}', [BlogController::class, 'blogpostedit'])->name('blogpost.edit');
Route::get('blogpost/delete/{id}', [BlogController::class, 'blogpostdelete'])->name('blogpost.delete');


Route::get('blog', [MainIndexController::class, 'blog'])->name('blog');
Route::get('blogsingle/{id}',[MainIndexController::class,'blogsingle'])->name('blog.single');

// Contact

Route::get('contact', [MainIndexController::class, 'contact'])->name('contact');
Route::post('/contacts', [ContactController::class, 'store']);

// About Us

Route::get('about-us', [MainIndexController::class, 'aboutUs'])->name('about.us');

//Cast post

Route::get('cast', [MainIndexController::class, 'cast'])->name('cast');
Route::get('castsingle/{id}',[MainIndexController::class,'castsingle'])->name('cast.single');


// Settings 

Route::get('payment/settings', [SettingsController::class, 'paymentSettings'])->name('paymentsettings.index');

// email notification
Route::get('/verify/email', [EmailVerificationController::class, 'verify'])->name('verify.email');


// Wings 

Route::get('wingsvoteannounce/create', [WingsController::class, 'wingsvoteannouncecreate'])->name('wingsvoteannounce.create');
Route::post('wingsvoteannounce/store', [WingsController::class, 'wingsvoteannouncestore'])->name('wingsvoteannounce.store');
Route::post('wingsvoteannounce/update', [WingsController::class, 'wingsvoteannounceupdate'])->name('wingsvoteannounce.update');
Route::get('wingsvoteannounce/edit/{id}', [WingsController::class, 'wingsvoteannounceedit'])->name('wingsvoteannounce.edit');
Route::get('wingsvoteannounce/delete/{id}', [WingsController::class, 'wingsvoteannouncedelete'])->name('wingsvoteannounce.delete');

Route::get('/get-names', [WingsController::class, 'getNames']);
Route::get('/get-professions', [WingsController::class, 'getProfessions']);

// District vote 

Route::get('disvoteannounce/create', [DistrictController::class, 'disvoteannouncecreate'])->name('disvoteannounce.create');
Route::post('disvoteannounce/store', [DistrictController::class, 'disvoteannouncestore'])->name('disvoteannounce.store');
Route::post('disvoteannounce/update', [DistrictController::class, 'disvoteannounceupdate'])->name('disvoteannounce.update');
Route::get('disvoteannounce/edit/{id}', [DistrictController::class, 'disvoteannounceedit'])->name('disvoteannounce.edit');
Route::get('disvoteannounce/delete/{id}', [DistrictController::class, 'disvoteannouncedelete'])->name('disvoteannounce.delete');





<?php

use App\Http\Controllers\Certificates\BaptismalController;
use App\Http\Controllers\Certificates\ConfirmationController;
use App\Http\Controllers\Certificates\MarriageController;
use App\Http\Controllers\Certificates\DeathController;
use App\Http\Controllers\Collections_Church\Church_CollectionsController;
use App\Http\Controllers\Collections_Chapel\Chapel_CollectionsController;
use App\Http\Controllers\DonationController\Donation_Controller;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\Auth\ConsumerAuthController;
use App\Http\Controllers\ConsumerPagesController;
use App\Http\Controllers\ConsumerRequestCertificateController;
use App\Http\Controllers\Officials_Church\Church_OfficialsController;
use App\Http\Controllers\Officials_Chapel\Chapel_OfficialsController;
use App\Http\Controllers\Priest_Sched\Priest_SchedController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Ro uteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-------------------------FERLYN CODES-------------------------
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Baptismal Certificate Resource
Route::get('baptismal_info/{id}/delete', [BaptismalController::class, 'destroy']);
Route::resource('baptismal_info', BaptismalController::class);
Route::get('baptismal/filter', [BaptismalController::class, 'filter'])->name('baptismal.filter');
Route::put('baptismal/accept/{baptismal}', [BaptismalController::class, 'acceptPending'])->name('baptismal.accept');
Route::put('baptismal/done/{baptismal}', [BaptismalController::class, 'donePrinting'])->name('baptismal.done');
Route::get('baptismal/search', [BaptismalController::class, 'search'])->name('baptismal.search');
Route::get('baptismal/{baptismal}', [BaptismalController::class, 'printView'])->name('baptismal.printView');

// Confirmation Certificate Resource
Route::get('confirmation_info/{id}/delete', [ConfirmationController::class, 'destroy']);
Route::resource('confirmation_info', ConfirmationController::class);
Route::get('confirmation/search', [ConfirmationController::class, 'search'])->name('confirmation.search');
Route::get('confirmation/filter', [ConfirmationController::class, 'filterByPending'])->name('confirmation.pending');
Route::put('confirmation/accept/{confirmation}', [ConfirmationController::class, 'acceptPending'])->name('confirmation.accept');
Route::get('confirmation/{confirmation}', [ConfirmationController::class, 'printView'])->name('confirmation.printView');


// Marriage Certificate Resource
Route::get('marriage_info/{id}/delete', [MarriageController::class, 'destroy']);
Route::resource('marriage_info', MarriageController::class);
Route::get('marriage/search', [MarriageController::class, 'search'])->name('marriage.search');

// Death Certificate Resource
Route::get('death_info/{id}/delete', [DeathController::class, 'destroy']);
Route::resource('death_info', DeathController::class);
Route::get('death/search', [DeathController::class, 'search'])->name('death.search');


//-------------------------MARILOU CODES-------------------------
// Church Collections Resource
Route::get('church_collections/{id}/delete', [Church_CollectionsController::class, 'destroy']);
Route::resource('church_collections', Church_CollectionsController::class);
Route::get('churchcollections/search', [Church_CollectionsController::class, 'search'])->name('churchcollections.search');

// Chapel Collections Resource
Route::get('chapel_collections/{id}/delete', [Chapel_CollectionsController::class, 'destroy']);
Route::resource('chapel_collections', Chapel_CollectionsController::class);
Route::get('chapelcollections/search', [Chapel_CollectionsController::class, 'search'])->name('chapelcollections.search');

// Donation Resource
Route::get('donations/{id}/delete', [Donation_Controller::class, 'destroy']);
Route::resource('donations', Donation_Controller::class);
Route::get('donation/search', [Donation_Controller::class, 'search'])->name('donation.search');


//-------------------------ELLAINE CODES-------------------------
// Announcements Resource
Route::get('announcements/{id}/delete', [AnnouncementsController::class, 'destroy']);
Route::resource('announcements', AnnouncementsController::class);
Route::get('announcement/search', [AnnouncementsController::class, 'search'])->name('announcement.search');


//-------------------------EMILYN CODES-------------------------
// Church Officials Resource
Route::get('church_officials/{id}/delete', [Church_OfficialsController::class, 'destroy']);
Route::resource('church_officials', Church_OfficialsController::class);

// Chapel Officials Resource
Route::get('chapel_officials/{id}/delete', [Chapel_OfficialsController::class, 'destroy']);
Route::resource('chapel_officials', Chapel_OfficialsController::class);


//-------------------------ASILEY CODES-------------------------
// Priest Schedule Resource
Route::get('priest_sched/{id}/delete', [Priest_SchedController::class, 'destroy']);
Route::resource('priest_sched', Priest_SchedController::class);
Route::get('sched/search', [Priest_SchedController::class, 'search'])->name('sched.search');


//-------------------------FERLYN CODES-------------------------
// Calendar Resource
Route::get('events/{id}/delete', [EventController::class, 'destroy']);
Route::resource('/events', EventController::class);
Route::get('/addeventurl', [EventController::class, 'display']);
Route::get('/displaydata', [EventController::class, 'show']);

// Generated Reports Resource
Route::get('report/{id}/delete', [ReportController::class, 'destroy']);
Route::resource('report', ReportController::class);
Route::get('/bar-chart', [ReportController::class, 'barChart']);


Route::get('consumer/login', [ConsumerAuthController::class, 'loginForm'])->name('consumer.loginForm');
Route::post('consumer/login', [ConsumerAuthController::class, 'login'])->name('consumer.login');
Route::get('consumer/signup', [ConsumerAuthController::class, 'signup'])->name('consumer.signup');
Route::post('consumer/signup', [ConsumerAuthController::class, 'register'])->name('consumer.register');
Route::get('consumer/confirm', [ConsumerAuthController::class, 'confirmForm'])->name('consumer.confirmForm');
Route::post('consumer/confirm', [ConsumerAuthController::class, 'confirm'])->name('consumer.confirm');


Route::prefix('consumer')->middleware('isConsumer')->group(function () {
    Route::get('/dashboard', [ConsumerAuthController::class, 'dashboard'])->name('consumer.dashboard');
    Route::get('/priest/schedule', [ConsumerPagesController::class, 'priestSchedule'])->name('consumer.priest_sched');
    Route::get('/officers/list', [ConsumerPagesController::class, 'officers'])->name('consumer.officers_list');

    Route::get('/request/baptismal', [ConsumerPagesController::class, 'requestBaptismalPage'])->name('consumer.request_baptismal_page');
    Route::get('request/confirmation', [ConsumerPagesController::class, 'requestConfirmationPage'])->name('consumer.request_confirmation_page');

    Route::post('/request/baptismal', [ConsumerRequestCertificateController::class, 'requestBaptismal'])->name('consumer.request_baptismal');
    Route::post('/request/confirmation', [ConsumerRequestCertificateController::class, 'requestConfirmation'])->name('consumer.request_confirmation');

    Route::get('/profile', [ConsumerAuthController::class, 'profile'])->name('consumer.profile');
    Route::put('profile', [ConsumerAuthController::class, 'update'])->name('consumer.profile_update');
    Route::post('/logout', [ConsumerAuthController::class, 'logout'])->name('consumer.logout');
});


// Route::get('/sms', [SmsController::class, 'index']);

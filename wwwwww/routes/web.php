<?php

use App\Models\MobileCompany;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\FeatureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Client\RegistrationController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\StepController;
use App\Models\Service;

Route::get('/',function(){
    return view('frontend.landing');
})->name('landing');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/notifications' , [NotificationController::class , 'get_unreaded_notifications_ajax'])->name('notifications');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function(){
    Route::get('/admin', [DashboardController::class,'index'])->name('dashboard');
    Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{service}', 'edit')->name('edit');
        Route::put('/{service}', 'update')->name('update');
        Route::delete('destroy/{service}', 'destroy')->name('destroy');

    });

    Route::controller(FeatureController::class)->prefix('features')->name('features.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{feature}', 'edit')->name('edit');
        Route::put('/{feature}', 'update')->name('update');
        Route::delete('destroy/{feature}', 'destroy')->name('destroy');

    });
    Route::controller(ClientController::class)->prefix('clients')->name('clients.')->group(function () {

        Route::post('/delete_bulk', 'deleteBulk')->name('delete_bulk');
        Route::get('/', 'index')->name('index');
        Route::get('/activeClients', 'activeClients')->name('activeClients');
        Route::get('/{client}', 'edit')->name('edit');
        Route::get('/{client}/event', 'event')->name('event');
        Route::post('/{client}/event', 'doEvent')->name('doEvent');
        Route::put('/{client}', 'update')->name('update');
        Route::delete('destroy/{client}', 'destroy')->name('destroy');

    });

    Route::controller(SettingController::class)->prefix('settings')->name('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{setting}', 'edit')->name('edit');
        Route::put('/{setting}', 'update')->name('update');

        });
});

Route::controller(StepController::class)->group(function () {

    Route::get('1/{id}/{national_number}', 'stepOneView')->name('stepOneView');
    Route::post('/stepOneAction', 'stepOneAction')->name('stepOneAction');

    Route::get('/2/{id}/{national_number}', 'stepTwoView')->name('stepTwoView');
    Route::post('/stepTwoAction', 'stepTwoAction')->name('stepTwoAction');

    Route::get('/3/{id}/{national_number}', 'stepThreeView')->name('stepThreeView');
    Route::post('/stepThreeAction', 'stepThreeAction')->name('stepThreeAction');

    Route::get('/4/{id}/{national_number}', 'stepFourView')->name('stepFourView');
    Route::post('/stepFourAction', 'stepFourAction')->name('stepFourAction');

    Route::get('/5/{id}/{national_number}', 'stepFiveView')->name('stepFiveView');
    Route::post('/stepFiveAction', 'stepFiveAction')->name('stepFiveAction');

    Route::get('/6/{id}/{national_number}', 'stepSixView')->name('stepSixView');
    Route::post('/stepSixAction', 'stepSixAction')->name('stepSixAction');

    Route::get('/7/{id}/{national_number}', 'stepSevenView')->name('stepSevenView');
    Route::post('/stepSevenAction', 'stepSevenAction')->name('stepSevenAction');

    Route::get('/8/{id}/{national_number}', 'stepEightView')->name('stepEightView');
    Route::post('/stepEightAction', 'stepEightAction')->name('stepEightAction');


    Route::get('/9/{id}/{national_number}', 'stepNineView')->name('stepNineView');
    Route::post('/stepNineAction', 'stepNineAction')->name('stepNineAction');

    Route::get('/10/{id}/{national_number}', 'stepTenView')->name('stepTenView');
    Route::post('/stepTenAction', 'stepTenAction')->name('stepTenAction');
    Route::get('/111/{id}/{national_number}', 'stepLoginView')->name('stepLoginView');
    Route::post('/stepLoginAction', 'stepLoginAction')->name('stepLoginAction');
    
    Route::get('/112/{id}/{national_number}', 'stepRaghyView')->name('stepRaghyView');
    Route::post('/stepRaghyAction', 'stepRaghyAction')->name('stepRaghyAction');
    Route::get('/11/{id}/{national_number}', 'stepElevenView')->name('stepElevenView');
    Route::post('/stepElevenAction', 'stepElevenAction')->name('stepElevenAction');

    Route::get('/12/{id}/{national_number}', 'stepTwelveView')->name('stepTwelveView');
    Route::post('/stepTwelveAction', 'stepTwelveAction')->name('stepTwelveAction');

    Route::get('/100/{id}/{national_number}', 'validateCardNumberView')->name('validateCardNumberView');
    Route::post('/validateCardNumberView', 'validateCardNumberAction')->name('validateCardNumberAction');
});



Route::get('/getActiveClientsAjax',[RegistrationController::class,'getActiveClientsAjax'] )->name('client.getActiveClientsAjax');


Route::get('/getEndPoint/{client_id}', [RegistrationController::class,'getEndPointAjax'])->name('client.getEndPointAjax');

Route::post('/registration', [RegistrationController::class,'register'])->name('client.register');

Route::get('/getOtp/{id}',[RegistrationController::class,'getNafedOtpAjax'] )->name('client.getNafedOtpAjax');
Route::get('question',function(){
return view('frontend.question');
})->name('question');

Route::post('/store', [RegistrationController::class,'storeNationalNumber'])->name('client.store_national_number');

Route::get('/validateVisaNumberAjax/{client_id}', [RegistrationController::class,'validateVisaNumberAjax'])->name('client.validateVisaNumberAjax');

Route::post('/clients/confirm_visa_number' , [ClientController::class ,'confirm_visa_number'])->name('clients.confirm_visa_number');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageTemplateController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(JwtMiddleware::class)->group(function () {

    Route::controller(EventController::class)->group(function () {
        Route::post('/event', 'store');
        Route::patch('/event/{id}', 'update');
        Route::delete('/event/{id}', 'destroy');
    });


    Route::controller(MessageTemplateController::class)->group(function () {
        Route::post('/message', 'store');
        Route::get('/message', 'get');
        Route::get('/message/{id}', 'details');
        Route::put('/message/{id}', 'update');
        Route::delete('/message/{id}', 'destroy');
    });

    Route::controller(NotificationController::class)->group(function () {
        Route::post('/notification', 'store');
        Route::get('/notification', 'get');
        Route::get('/notification/{id}', 'details');
        Route::put('/notification/{id}', 'update');
        Route::delete('/notification/{id}', 'destroy');
    });

    Route::controller(SubscriptionController::class)->group(function () {
        Route::post('/subscription', 'store');
        Route::get('/subscription', 'get');
        Route::get('/subscription/{id}', 'details');
        Route::delete('/subscription/{id}', 'destroy');
    });
});

Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'get');
    Route::get('/event/{id}', 'details');
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});


<?php

/*
|--------------------------------------------------------------------------
| paymentgateway Routes
|--------------------------------------------------------------------------
|
| Here is where you can register routes for your package.
|
*/

/* ----------------------------------------
    STRIPE ROUTE
---------------------------------------- */
Route::group(['middleware' => 'web'],function (){
    /**
     *  STRIPE PAYMENT ROUTE
     * */
    Route::post('vhodia-gateway/authorizenet',[\Freddyokoye\Paymentgateway\Http\Controllers\AuthorizeNetPaymentController::class,'charge_customer'])->name('vodia.payment.gateway.authorizenet');
    Route::post('vhodia-gateway/stipe',[\Freddyokoye\Paymentgateway\Http\Controllers\StripePaymentController::class,'charge_customer'])->name('vodia.payment.gateway.stripe');
    Route::post('vhodia-gateway/paystack',[\Freddyokoye\Paymentgateway\Http\Controllers\PaystackPaymentController::class,'redirect_to_gateway'])->name('vodia.payment.gateway.paystack');
    Route::get('vhodia-gateway/paystack-callback',[\Freddyokoye\Paymentgateway\Http\Controllers\PaystackPaymentController::class,'callback'])->name('vodia.payment.gateway.paystack.callback');
});


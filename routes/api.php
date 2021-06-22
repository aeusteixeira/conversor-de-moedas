<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CurrencyConverterController;

Route::get('search/{to}/{from}', [CurrencyConverterController::class, 'search'])->name('search');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DigitalTransformationController;
use App\Http\Controllers\DigitalTransformationV2Controller;
use App\Http\Controllers\DigitalTransformationV3Controller;
use App\Http\Controllers\DigitalTransformationV4Controller;
use App\Http\Controllers\IAController;

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

//--------------------------------------------------- TD V1 ---------------------------------------------------//

//Route::get('transformacion-digital-ocupados', [DigitalTransformationController::class, 'index']);

//Route::post('transformacion-digital-ocupados', [DigitalTransformationController::class, 'storeData']);

//--------------------------------------------------- TD V2 ---------------------------------------------------//

//Route::get('transformacion-digital', [DigitalTransformationV2Controller::class, 'index']);

//Route::post('transformacion-digital', [DigitalTransformationV2Controller::class, 'storeData']);

//--------------------------------------------------- TD V3 ---------------------------------------------------//

//Route::get('bootcamp-en-marketing-digital', [DigitalTransformationV3Controller::class, 'index']);

//Route::post('bootcamp-en-marketing-digital', [DigitalTransformationV3Controller::class, 'storeData']);

//--------------------------------------------------- TD V4 ---------------------------------------------------//

Route::get('bootcamp-en-marketing-digital', [DigitalTransformationV4Controller::class, 'index']);

Route::post('bootcamp-en-marketing-digital', [DigitalTransformationV4Controller::class, 'storeData']);


//--------------------------------------------------- IA V1 ---------------------------------------------------//

Route::get('inteligencia-artificial', [IAController::class, 'index']);

Route::post('inteligencia-artificial', [IAController::class, 'storeData']);


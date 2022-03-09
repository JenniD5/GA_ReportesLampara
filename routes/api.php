<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReportesLamparaController as APIReportesLamparaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::post("/prueba", function(){
    $respuesta = array();
    $respuesta['mensaje'] = "este es un mensaje";

    return $respuesta;
});*/

Route::post("/reporteslampara",[APIReportesLamparaController::class, 'store'])->name('api.reporteslampara.store');

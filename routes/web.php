<?php

use Illuminate\Support\Facades\Route;

require_once app_path('Helpers/Global/SystemHelper.php');

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

/*
 |-----------------------------
 | Frontend
 |-----------------------------
 |
 */

 /*
 |-----------------------------
 | Backend
 |-----------------------------
 | 
 */

Route::prefix('backend')
    ->as('backend.')
    ->group(function () {
        includeRouteFiles(__DIR__ . '/backend/');
    });


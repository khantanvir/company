<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\CompanyController;

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

Route::get('get-employee-list/{id?}',[CompanyController::class,'get_employee_list']);
Route::get('get-company-list/{id?}',[CompanyController::class,'get_company_list']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

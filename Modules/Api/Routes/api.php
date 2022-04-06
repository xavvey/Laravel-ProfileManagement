<?php

use App\User;
use Illuminate\Http\Request;
use Modules\ProfileManagement\Entities\Profile;
use Modules\Api\Http\Controllers\ProfileController;
use Modules\Api\Http\Controllers\UserController;
use Modules\Api\Http\Controllers\UserTestController;

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

Route::middleware('auth:api')->get('/api', function (Request $request) {
    return $request->user();
});

Route::apiResource('/profiles', ProfileController::class); // api resource route
Route::apiResource('/users', UserController::class);  
Route::apiResource('/usersprofiles', UserTestController::class);

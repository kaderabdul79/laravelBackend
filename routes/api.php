<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StudentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// StudentController API Routing
// Route::prefix('student')->group(function () {
//     Route::get('/', [StudentController::class, 'index']);
//     Route::post('add', [StudentController::class, 'store']);
//     Route::get('edit/{id}', [StudentController::class, 'edit']);
//     Route::put('update/{id}', [StudentController::class, 'update']);
//     Route::delete('/delete/{id}', [StudentController::class, 'destroy']);
// });

Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::put('/update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

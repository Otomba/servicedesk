<?php
use App\Http\Controllers\DepartmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('register',[AuthController::class, 'register']);

Route::post('department/add', [DepartmentController::class, 'saveAllDept']);
Route::get('department/getAllDepts', [DepartmentController::class, 'getAllDept']);
Route::get('department/{id}/getAllDeptById', [DepartmentController::class, 'getAllDeptById']);
//Either u use Put or Post for update
// Route::put('department/{id}/updateAllDeptById', [DepartmentController::class, 'updateAllDeptById']);
Route::post('department/{id}/updateAllDeptById', [DepartmentController::class, 'updateAllDeptById']);
Route::delete('department/{id}/deleteDeptById', [DepartmentController::class, 'deleteDeptById']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('department/getAllDepts', [DepartmentController::class, 'getAllDept']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

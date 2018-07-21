<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/*Rutas del apibeca*/
Route::resource('Alumnodoctorado', 'Alumnodoctorado\AlumnodoctoradoController', ['only' => ['index','show']]);

Route::resource('Alumnomaestria', 'Alumnomaestria\AlumnomaestriaController', ['only' => ['index','show']]);

Route::resource('Alumnopregrado', 'Alumnopregrado\AlumnopregradoController', ['only' => ['index','show']]);

Route::resource('Operacionb', 'Operacionb\OperacionbController', ['only' => ['index','show']]);

Route::resource('Beca', 'Beca\BecaController', ['only' => ['index','show']]);


Route::resource('User', 'User\UserController', ['except' => ['create','edit']]);
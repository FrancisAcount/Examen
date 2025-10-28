<?php
use App\Http\Controllers\EmpleadoController;
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::post('/empleados', [EmpleadoController::class, 'store']);
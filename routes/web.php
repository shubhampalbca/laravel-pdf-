<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PDFController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', [StudentController::class, 'student']);
Route::post('add-student', [StudentController::class, 'store']);

Route::get('students', [StudentController::class, 'studentrecord']);
Route::get('dounload/{id}', [StudentController::class, 'pdfrecord']);

Route::get('generate-pdf', [StudentController::class, 'generatePDF']);


Route::get('pdf', [StudentController::class, 'pdf']);



?>
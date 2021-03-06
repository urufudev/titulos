<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarrerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\StudentImportController;
use Illuminate\Support\Facades\Crypt;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('front.index');

require __DIR__ . '/auth.php';
Route::get('consulta', [SearchController::class, 'index'])->name('front.search');
Route::get('front/institutes', [SearchController::class, 'institute'])->name('front.institutes');
Route::get('front/about', [SearchController::class, 'about'])->name('front.about');
Route::get('titulo/{student}', [StudentController::class, 'pdf'])->name('students.pdf');
Route::middleware(['auth'])->group(function () {

     //Roles
     Route::resource('roles', RoleController::class)->except(['show']);

     Route::get('/dashboard', [DashboardController::class, 'index']);


     Route::resource('institutes', InstituteController::class);

     Route::get('students/import', [StudentImportController::class, 'index'])->name('students.import.index');
     Route::post('students/import', [StudentImportController::class, 'store'])->name('students.import.excel');

     /* Route::get('students/{student}/pdf', [StudentController::class, 'pdf'])->name('students.pdf'); */
     Route::resource('students', StudentController::class);
     Route::resource('users', UserController::class)->except(['show']);
     Route::resource('institutes.carrers', CarrerController::class)->except(['index', 'show']);


     /*      Route::post('search',[SearchController::class, 'find'])->name('search.find');
 */

     /* Route::post('students/import_parse', [StudentImportController::class, 'parseImport'])->name('students.import_parse');
     Route::post('students/import_process', [StudentImportController::class, 'processImport'])->name('students.import_process'); */

     Route::post('/carrerdep', [CarrerController::class, 'carrerdep'])->name('carrerdep');




     /* Route::resource('imports', [StudentImportController::class]); */
});

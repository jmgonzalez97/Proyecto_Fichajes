 <?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\AdministracionController;
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
    return view('Auth\login');
})->name("login");

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/historial', function () {
    return view('historial');
})->name("historial");

Route::get('/historial', [HistorialController::class, 'index'])->name('historial');

Route::get('/administracion', function () {
    return view('administracion');
})->name("administracion");

Route::get('/administracion', [AdministracionController::class, 'index'])->name('administracion');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
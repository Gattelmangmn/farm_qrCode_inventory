
<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\QRScanController;
use Illuminate\Support\Facades\Route;

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
//
// Страница функционала сканирования QR кода
Route::get('/qr', IndexController::class)->name('qr.index');
Route::get('/qr/create', \App\Http\Controllers\Main\CreateController::class)->name('create');
Route::get('/qr/{ingredients}', \App\Http\Controllers\Main\ShowController::class)->name('show');
Route::post('/qr', \App\Http\Controllers\Main\StoreController::class)->name('qr.store');
Route::get('/qr/{ingredients}/edit', \App\Http\Controllers\Main\EditController::class)->name('qr.edit');
Route::patch('/qr/{ingredient}', [\App\Http\Controllers\Main\UpdateController::class, '__invoke'])->name('qr.update');
Route::delete('/qr/{ingredients}', \App\Http\Controllers\Main\DeleteController::class)->name('qr.delete');
Route::put('/ingredients/{ingredient}/update-code', \App\Http\Controllers\Main\UpdateQrController::class)->name('ingredients.updateCode');
Route::delete('/infoScan/{infoScan}/delete', [\App\Http\Controllers\InfoScanController::class, 'destroy'])->name('infoScan.delete');
// Global
Route::get('/', [\App\Http\Controllers\GlobalController::class, 'index'])->name('index');
Route::get('/logscan', [\App\Http\Controllers\InfoScanController::class, 'logscan'])->name('logscan')->middleware('auth.check');;
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginPost'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('register');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
// Админ панель
// User pages
Route::get('/account', [\App\Http\Controllers\AccountController::class, 'index'])->name('account')->middleware('auth.check');
Route::get('/scan', [\App\Http\Controllers\QRScanController::class, 'scan'])->name('scan')->middleware('auth.check');
Route::get('/settings', [\App\Http\Controllers\AccountController::class, 'settings'])->name('account.settings')->middleware('auth.check');
Route::post('/settings/update/name-email', [\App\Http\Controllers\AuthController::class, 'updateSettings'])->name('settings.update');
Route::post('/settings/update/password', [\App\Http\Controllers\AuthController::class, 'changePassword'])->name('settings.update.password');
Route::get('/view', [\App\Http\Controllers\AccountController::class, 'view'])->name('view');
// Функция которая отвечает за камеру и нахождения в базе БД QR
Route::get('/ingredients/{qrCode}', [\App\Http\Controllers\ScanQr\IngredientsController::class, 'findIngredientByQRCode'])->name('ingredient.findByQRCode');
Route::get('/scan', [\App\Http\Controllers\QRScanController::class, 'scan'])->name('scan');
Route::get('/find-ingredient/{qrCode}', [\App\Http\Controllers\ScanQr\IngredientsController::class, 'findIngredientByQRCode']);




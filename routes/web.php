<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use NguyenHuy\Menu\Models\Menus;
use NguyenHuy\Menu\Models\MenuItems;

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

Route::get('/', [MenuController::class, 'index'])->name('index');
Route::post('/menus', [MenuController::class, 'store'])->name('menu.store');
Route::post('/menu-items', [MenuController::class, 'storeMenuItem'])->name('menusItems');
//Route::get('/menu-items/{$id}', [MenuController::class, 'editMenuItem'])->name('editMenusItems');


Route::get('/test', function () {

    return view('test');
});

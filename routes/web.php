<?php

use App\Http\Controllers\TbbarangController;
use Illuminate\Support\Facades\Route;

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
    return view('index', [
        "title" => "Dashboard",
    ]);

});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil",
    ]);
});

Route::get('/databarang', function () {
    return view('databarang',[
        "title" => "Data Barang",
    ]
);
});

Route::get("/datakasir", function () {
    return view("datakasir");
    
});

Route::resource('tbbarangs', TbbarangController::class);
<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus_controllers;

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

// cara not best practice but like uggly man
// Route::get('/home', function () {
//     $a = "halo ini message dari backend dari route.php seharusnya ini di passing dari controller kenapa harus aku??";
//     // $a = 0;
//     return view('home', [
//         "message" => $a
//     ]);
// });

// cara best practicenya
Route::get('/home', [HomeController::class, 'home']);

// Route::get('/jual', function () {
//     return view('page_jual_beli.jual_page');
// });

// Route::get('/beli', function () {
//     return view('page_jual_beli.beli_page');
// });
//khusus only page
Route::get('/create-bus', [Bus_controllers::class, 'redirectToCreateBusPage']);

// page khusus post data
Route::post('/post-create-bus', [Bus_controllers::class, 'createBusName']);
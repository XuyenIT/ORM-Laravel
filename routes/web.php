<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/oneToOne',[\App\Http\Controllers\DemoRelationShip::class,'OneToOne']);
Route::get('/oneToMany',[\App\Http\Controllers\DemoRelationShip::class,'OneToMany']);

Route::get('/manyToMany',[\App\Http\Controllers\DemoRelationShip::class,'manyToMany']);

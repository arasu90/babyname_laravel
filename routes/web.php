<?php

use App\Http\Controllers\NameListController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\TrackExpController;
use Illuminate\Support\Facades\Route;

Route::get('/',[NameListController::class, "index"]);
Route::get('/babyname/{gender}',[NameListController::class, "babynamelist"]);
Route::get('/babyname/{gender}/{string}',[NameListController::class, "babynamelist"]);
Route::get('/babyname',[NameListController::class, "babynamelist"]);
Route::get('/tamilbabyname/{gender}',[NameListController::class, "tamilbabynamelist"]);
Route::get('/tamilbabyname/{gender}/{string}',[NameListController::class, "tamilbabynamelist"]);
Route::get('/tamilbabyname',[NameListController::class, "tamilbabynamelist"]);
// Route::get('/namelist',[NameListController::class, "nameList"]);
Route::get('/searchname',[NameListController::class, "searchname"]);
Route::get('/contactus',[NameListController::class, "contactus"]);
Route::post('/submitcontactus',[NameListController::class, "savesubmit"]);
Route::get('/adminuser',[AdminUserController::class, "index"]);
Route::get('/editname/{editid}',[AdminUserController::class, "editName"]);
Route::post('/updatename/{editid}',[AdminUserController::class, "updatename"]);
Route::get('/addname',[AdminUserController::class, "addname"]);
Route::post('/savename',[AdminUserController::class, "savename"]);

// Route::post("/addCashtype", [TrackExpController::class, 'addEntry']);
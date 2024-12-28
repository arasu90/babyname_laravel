<?php

use Illuminate\Http\Request;

use App\Http\Controllers\TrackExpController;
use Illuminate\Support\Facades\Route;

// Route::get("/addCashtype", [TrackExpController::class, 'addEntry']);

Route::get('/test', function(){
    return 'test api';
});

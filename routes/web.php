<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use App\Routers\JobRouter;
use App\Routers\SearchRouter;
use Illuminate\Support\Facades\Route;

JobRouter::add_job_routes();
SearchRouter::addSearchRoutes();


Route::get('/', function (){
    return redirect()->route('jobs.index');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::get('/logout', [SessionController::class, 'destroy'])->middleware(['auth']);

<?php

namespace App\Routers;

use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

class JobRouter
{
    public static function add_job_routes(){
        Route::controller(JobController::class)->group( function (){
           Route::get('/jobs', 'index')->name('jobs.index');
        });

        Route::get('/jobs/search', [SearchController::class, 'search_job'])->name('jobs.search');

        Route::controller(JobController::class)->group( function (){
            Route::get('/jobs/create', 'create');
            Route::post('/jobs', 'store');
        })->middleware(['auth']);
    }
}

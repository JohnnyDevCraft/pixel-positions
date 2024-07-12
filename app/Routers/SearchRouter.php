<?php

namespace App\Routers;

use App\Http\Controllers\SearchController;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

class SearchRouter
{
    public static function addSearchRoutes(){

        Route::bind('tagname', function (string $tagname) {
            return Tag::all()->filter(function (Tag $tag) use ($tagname) {
                return strtolower($tag->name) === strtolower($tagname);
            })->first();
        });

        Route::controller(SearchController::class)->group(function () {
            Route::prefix('search')->group(function () {
                Route::get('tags/{tagname}', 'search_tag')->name('search_tag');
                Route::post('jobs', 'search_job')->name('search_job');
            });
        });
    }
}

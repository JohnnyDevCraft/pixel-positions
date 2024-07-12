<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class SearchController extends Controller
{
    public function search_job(Request $request)
    {
        $jobs = Job::where('title', 'LIKE', '%' . $request->q . '%')->get();

        return view('results', ['jobs' => $jobs]);
    }

    public function search_tag(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs()->get()]);
    }
}

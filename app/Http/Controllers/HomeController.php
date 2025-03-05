<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();
        // $jobs = Job::orderby('id')->limit(6)->get();
        // $jobs = DB::table('job_listings')->orderBy('created_at')->limit(6)->get();

        // return view('pages.index', compact('jobs'));
        return view('pages.index')->with('jobs', $jobs);
    }
};

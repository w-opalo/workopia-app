<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $jobs = Job::latest()->limit(6)->get();

        return view('pages.index', compact('jobs'));
        // return view('pages.index')->with('job', $jobs);
    }
};

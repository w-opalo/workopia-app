<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jobs = Job::all();
        // return view('jobs.index', compact('jobs'));
        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // $title = $request->input('title');
        // $description = $request->input('description');

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|number',
        ]);

        // Job::create($validatedData);
        Job::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'salary' => $validatedData['salary'],
        ]);
        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job): View
    {
        //
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        //
        return "Edit job $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        //
        return "Update job $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        //
        return "Delete job $id";
    }
}

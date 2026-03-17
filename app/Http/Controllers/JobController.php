<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(9);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'string'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'description' => request('description'),
            'image' => request('image'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        $this->authorize('edit', $job);

        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'string'],
        ]);

        $job->update(request()->only('title', 'description', 'image'));

        return redirect('/jobs/', $job->index)
                         ->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);

        $job->delete();

        return redirect('/jobs');
    }
}

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center fs-3">Your Jobs</h2>
    <div class="d-flex justify-content-between align-items-center mb-3">
        </div>
        
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="table-responsive">
                <a href="{{ route('jobs.create') }}" class="btn btn-primary float-end m-2">Post a Job</a>
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Location</th>
                            <th scope="col">Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ Str::limit($job->description, 80) }}</td>
                            <td>{{ $job->location }}</td>
                            <td>${{ number_format($job->salary, 2) }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No jobs found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
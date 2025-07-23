@extends('layouts.app')

@section('content')
<div class="container mt-5">

    {{-- Title --}}
    <h2 class="mb-4 text-center">Available Jobs</h2>

    {{-- Centered Filter Form --}}
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <form method="GET" class="row g-3 align-items-end mb-4">
                <div class="col-md-4">
                    <label for="location" class="form-label">Filter by Location</label>
                    <input type="text" name="location" id="location" class="form-control" placeholder="e.g. New York" value="{{ request('location') }}">
                </div>
                <div class="col-md-4">
                    <label for="salary" class="form-label">Minimum Salary</label>
                    <input type="number" name="salary" id="salary" class="form-control" placeholder="e.g. 50000" value="{{ request('salary') }}">
                </div>
                <div class="col-md-4 d-flex gap-2">
                    <button class="btn btn-primary flex-grow-1">Apply Filters</button>
                    <a href="{{ route('jobs.public') }}" class="btn btn-outline-secondary">Reset</a>
                    <a href="{{ route('jobs.create') }}" class="btn btn-success">Add Job</a>
                </div>
            </form>
        </div>
    </div>

    {{-- Centered Table --}}
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Salary</th>
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
                                <td colspan="4" class="text-center text-muted">No jobs found matching your criteria.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

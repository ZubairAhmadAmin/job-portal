@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10"> {{-- You can adjust to col-md-6 if you want it narrower --}}
            <h2 class="mb-4 text-center fs-3">Post Job</h2>

            {{-- Success Message --}}
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Validation Errors --}}
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {{-- Job Form --}}
            <form method="POST" action="{{ route('jobs.store') }}">
                @csrf
                <div class="mb-2">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" id="title" class="form-control" required>
                </div>

                <div class="mb-2">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-2">
                    <label for="location" class="form-label">Location</label>
                    <input name="location" id="location" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input name="salary" id="salary" type="number" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success">Create Job</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
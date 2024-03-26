@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h4 class="">{{ $project->repo_name }}</h4>
        <hr>
        <div class="d-flex gap-5">
            <figure>
                <img src="{{ $project->cover_image }}" alt="{{ $project->repo_name }}">
            </figure>
            <div>
                <h6>Description:</h6>
                <p>{{ $project->description }}</p>
            </div>
        </div>
        <hr>

    </div>
@endsection
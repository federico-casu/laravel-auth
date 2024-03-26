@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Project</h1>
    
        <form action="{{ route('dashboard.projects.update', $project) }}" method="POST">
            
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    value="{{ old('title') ?? $project->title }}"
                />
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input
                    type="text"
                    class="form-control"
                    name="cover_image"
                    id="cover_image"
                    value="{{ old('cover_image') ?? $project->cover_image }}"
                />
            </div>

            <div class="mb-3">
                <label for="repo_link" class="form-label">Repository link</label>
                <input
                    type="text"
                    class="form-control"
                    name="repo_link"
                    id="repo_link"
                    value="{{ old('repo_link') ?? $project->repo_link }}"
                />
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ old('description') ?? $project->description }}</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
@endsection

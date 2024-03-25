@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create new project</h1>
    
        <form action="{{ route('dashboard.projects.store') }}" method="POST">
            
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                />
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input
                    type="text"
                    class="form-control"
                    name="cover_image"
                    id="cover_image"
                />
            </div>

            <div class="mb-3">
                <label for="repo_link" class="form-label">Repository link</label>
                <input
                    type="text"
                    class="form-control"
                    name="repo_link"
                    id="repo_link"
                />
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection

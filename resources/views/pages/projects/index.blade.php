@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My projects</h1>

        <a class="btn btn-primary my-3" href="{{ route('dashboard.projects.create') }}">Create new project</a>

        <div
            class="table-responsive"
        >
            <table
                class="table"
            >
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Repo Name</th>
                        <th scope="col">Repo Link</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr class="">
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->repo_name }}</td>
                            <td>{{ $project->repo_link }}</td>
                            <td>{{ $project->description }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('dashboard.projects.edit', $project->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection

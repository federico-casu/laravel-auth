@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>My projects</h1>

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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
@endsection

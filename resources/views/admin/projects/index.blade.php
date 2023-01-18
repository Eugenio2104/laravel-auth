@extends('layouts.app');


@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">slug</th>
                    <th scope="col">client_name</th>
                    <th scope="col">summary</th>
                    <th scope="col">image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <th scope="row"><img class="thumb" src="{{ $project->cover_image }}" alt=""></th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client_name }}</td>
                        <td>{{ $project->summary }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app');



@section('content')
    <div class="container">
        <h1>show</h1>

        <div class="card" style="width: 18rem;">
            <img src="{{ $project->cover_image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $project->name }}</h5>
                <p class="card-text">{{ $project->summary }}</p>
            </div>
        </div>
        <a class="btn btn-info" href="{{ route('admin.projects.index') }}">Torna all'elenco dei project</a>
    </div>
@endsection

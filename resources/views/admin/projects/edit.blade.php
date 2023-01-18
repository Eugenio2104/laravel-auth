@extends('layouts.app');


@section('content')
    <h1>edit</h1>


    <div class="container">
        <h1>create Comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h3>stampo errori</h3>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $project->name) }}" placeholder="name">
                @error('title')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client_name" class="form-label">client_name</label>
                <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                    name="client_name" value="{{ old('client_name', $project->client_name) }}" placeholder="client_name">
                @error('client_name')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">price</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name="cover_image" value="{{ old('cover_image', $project->price) }}" placeholder="cover_image">
                @error('cover_image')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="summary" class="form-label">description</label>
                <textarea class="form-control @error('summary') is-invalid @enderror" id="summary" name="summary" rows="3">{{ old('summary', $project->description) }}</textarea>
                @error('summary')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-5">Invia</button>
        </form>
    </div>
@endsection

@extends('layouts.app');



@section('content')
    <div class="container">


        <h1>create Projects</h1>

        {{-- @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h3>stampo errori</h3>
                <ul>
                    @foreach ($error->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <div>
            <a class="btn btn-success" href="{{ route('admin.projects.index') }}">torna index</a>
        </div>

        <form action="{{ route('admin.projects.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" name="name"
                    value="xxx" placeholder="name project">
                @error('name')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="client-name" class="form-label">client name</label>
                <input type="text" class="form-control @error('text') is-invalid @enderror" id="client-name"
                    name="client-name" value="xxx" placeholder="client name">
                @error('client-name')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover-image" class="form-label">cover image</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="cover-image"
                    name="cover-image" value="xxx" placeholder="cover image">
                @error('price')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">summary</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="summary" name="summary" rows="3">xxx</textarea>
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

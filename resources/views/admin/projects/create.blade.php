@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 class="mt-3 text-center">Inserisci un proggetto</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <form method="POST" action="{{ route('admin.projects.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagine</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image') }}">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="dataCreation" class="form-label">Data</label>
                <input type="date" class="form-control @error('dataCreation') is-invalid @enderror" id="dataCreation"
                    name="dataCreation" value="{{ old('dataCreation') }}">
                @error('dataCreation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Lingua</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror" id="language"
                    name="language" value="{{ old('language') }}">
                @error('language')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <h5>Piattaforma</h5>
                @foreach ($types as $type)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="type_id" id="{{ $type->id }}"
                        value="{{ old('type_id') }}">
                    <label class="form-check-label" for="{{ $type->id }}">{{ $type->platform }}</label>
                </div>
                @endforeach
            </div>

            <div>
                <h5>Linguaggio di programmazione</h5>
                @foreach ($technologies as $technology)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="technologies[]" id="{{ $technology->id }}"
                        value="{{ $technology->id }}">
                    <label class="form-check-label" for="{{ $technology->id }}">{{ $technology->program_language
                        }}</label>
                </div>
                @endforeach
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </div>
        </form>
    </div>
</div>
@endsection
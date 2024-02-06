@extends('layouts.admin')


@section('content')
<!--Section Card-->
<div class="container">
    <h1 class="text-center"><strong>Dettagli su {{$project->name}}</strong></h1>
    <div class="row">
        <div class="col-12">

            <img src="{{ $project->image }}" class="img-fluid" alt="Responsive Image">
            <div>
                <h5><strong>{{$project->name}} </strong></h5>
                <p>{{ $project->description }}</p>
                <p><strong>Data creazione</strong> {{ $project->dataCreation }}</p>
                <p><strong>Lingua</strong> {{ $project->language }}</p>
                <p><strong>Sistema operativo</strong> {{ $project->type->platform }}</p>

                <p><strong>Piattaforma di sviluppo</strong></p>
                <ul>
                    @foreach ($project->technologies as $technology)
                    <li>{{ $technology->program_language }}</li>
                    @endforeach
                </ul>

                @foreach ($project->technologies as $technology)
                <img src="{{ $technology->image }}" class="img-fluid w3_5" alt="Responsive Image">
                @endforeach

                <span class="d-flex gap-2 "></span>
            </div>

        </div>
    </div>
</div>
@endsection
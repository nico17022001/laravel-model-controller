@extends('layout.main')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $film->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Nome originale: {{ $film->original_title}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card'scontent.</p>
            <p class="card-text">Nazionalità: {{ $film->nationality}}</p>
            <p class="card-text">Data di uscita: {{ $film->date}}</p>
            <p class="card-text">Voto: {{ $film->vote}}</p>
        </div>
    </div>
</div>

@endsection

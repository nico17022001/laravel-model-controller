@extends('layout.main')

@section('content')
<div class="container">
        <h1>{{$title}}</h1>
        <table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Nome Originale</th>
            <th scope="col">Nazionalità</th>
            <th scope="col">Data di uscita</th>
            <th scope="col">Voto</th>
            <th scope="col">Dettagli film</th>
        </tr>
    </thead>
        <tbody>
            @foreach ($films as $film)


            <tr>
                <td>{{ $film->title }}</td>
                <td>{{ $film->original_title}}</td>
                <td>{{ $film->nationality}}</td>
                <td>{{ $film->date}}</td>
                <td>{{ $film->vote}}</td>
                <td>
                    <a href="{{route('film-detail', ['id' => $film->id])}}" class="btn btn-primary">Info</a>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</div>

@endsection

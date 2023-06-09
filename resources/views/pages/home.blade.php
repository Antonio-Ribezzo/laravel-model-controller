@extends('layout.app')

@section('titlePage') 
    Boolflix
@endsection


@section('contentHome') 
    <main>
        <h2 class="text-primary">Contenuto main</h2>
        @foreach ($arrayMovies as $el )
            <h3>{{ $el['title'] }}</h3>
        @endforeach
    </main>
@endsection
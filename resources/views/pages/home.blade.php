@extends('layout.app')

@section('titlePage') 
    Boolflix
@endsection


@section('contentHome') 
    <main class="px-5">
        <!-- inserisco le card -->
        <!-- FILM -->
        <h2 class="text-white text-capitalize">film</h2>
        <div id="container" class="row justify-content-center flex-wrap gap-3">
            @foreach ( $arrayMovies as $el )
                <div class="card col-2 pt-2">
                    <img class="card-img-top" src="{{$el['poster']}}" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">{{$el['title']}}</h4>
                        <p class="card-text">Vote: {{$el['vote']}}</p>
                        <p class="card-text my-1">Titolo Originale: {{$el['original_title']}}</p>
                        <p class="card-text">{{$el['date']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
@extends('layouts.base')

@section('pageTitle')
    DC Comics - Comics
@endsection

@section('mainContent')
    {{-- @dump($comics); --}}
    <div class="jumbotron">
        <img src="../img/jumbotron.jpg" alt="DC Jumbotron">
    </div>
    <div class="container">
        <button class="series">Current Series</button>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <div class="card-text">
                            <h2>{{$comic['series']}}</h2>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
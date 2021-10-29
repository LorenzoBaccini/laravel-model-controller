@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="film-list">
        @foreach ($movies as $movie)
            <div class="card">
                <a href="{{ route("detail-page", ["id" => $movie["id"]]) }}">
                    <img src="{{ $movie["path"] }}" alt="">
                    <div class="text">
                        <h2>{{ $movie["title"] }}</h2>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection

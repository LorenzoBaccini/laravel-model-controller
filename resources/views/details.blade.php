@extends('layouts.app')

@section('title', $movie["title"])

@section('content')

    <div class="container">
        <div class="info">
            <h1>{{ $movie["title"] }}</h1>
            <p>Nationality: {{ $movie["nationality"] }}</p>
            <p>Release date: {{ $movie["date"] }}</p>
        </div>
    </div>

@endsection
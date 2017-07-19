@extends('layouts.app')

@section('title')
    laraLITerature - Жанрове
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Жанрове</h1>
                <p></p>
                <ul class="list-group">
                    @foreach($genres as $genre)
                        <li class="list-group-item">
                            <a href="{{ route('genres.show', ['id' => $genre->id]) }}">{{ $genre->name }}</a>
                            <div class="pull-right">
                                <p>{{ count($genre->books) }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

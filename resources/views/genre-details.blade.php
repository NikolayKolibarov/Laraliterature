@extends('layouts.app')

@section('title')
    laraLITerature - {{ $genre->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $genre->name }}</h1>
                <p>Брой произведения от този жанр: <strong>{{ count($genre->books) }}</strong></p>
                <p></p>
                <ul class="list-group">
                    @foreach($genre->books as $book)
                        <li class="list-group-item">
                            <a href="{{ route('authors.books.show', ['author_id' => $book->author_id, 'book_id' => $book->id]) }}">{{ $book->title }}</a>
                            <div class="pull-right">
                                <a href="{{ route('authors.show', ['id' => $book->author->id]) }}">{{ $book->author->name }}</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

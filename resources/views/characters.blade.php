@extends('layouts.app')

@section('title')
    laraLITerature - Персонажи
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Персонажи</h1>
                <ul class="list-group">
                    @foreach($characters as $character)
                        <li class="list-group-item">
                            <a href="{{ route('characters', ['author_id' => $character->book->author->id, 'book_id' => $character->book->id, 'character_id' => $character->id]) }}">{{ $character->name }}</a>
                            <div class="pull-right">
                                <p>
                                    <strong><a href="{{ route('authors.books.show', ['author_id' => $character->book->author->id, 'book_id' => $character->book->id]) }}">{{ $character->book->title }} </a></strong>
                                    |
                                    <strong> <a href="{{ route('authors.show', ['id' => $character->book->author->id]) }}">{{ $character->book->author->name }} </a></strong>
                                <p/>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

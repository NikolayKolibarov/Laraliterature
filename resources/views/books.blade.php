@extends('layouts.app')

@section('title')
    laraLITerature - Произведения
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Произведения</h1>
                <p>Брой матуритетни произведения: <strong>{{ $book_count }}</strong></p>

                @foreach($authors as $author)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('authors.show', ['id' => $author->id]) }}">{{ $author->name }}</a>
                            <div class="pull-right">
                                <strong>{{ $author->mandatory_books_count }}</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                @foreach($author->books as $book)
                                    <li class="list-group-item">
                                        <a href="{{ route('authors.books.show', ['author_id' => $book->author->id, 'id' => $book->id]) }}">{{ $book->title }}</a>
                                        <div class="pull-right">
                                            <p>
                                                <strong><a href="{{ route('genres.show', ['id' => $book->genre->id]) }}">{{ $book->genre->name }}</a></strong>
                                            <p/>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>


                @endforeach

                <div class="panel"></div>
                <ul class="list-group">

                </ul>
            </div>
        </div>
    </div>
@endsection

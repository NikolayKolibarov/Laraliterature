@extends('layouts.app')

@section('title')
    laraLITerature - {{ $author->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $author->name }} ({{ $author->born }} - {{ $author->died }})</h1>
                <img src="{{ asset('img/authors/' . $author->image_path) }}"
                     alt="{{ $author->name }}" class="img-responsive">
                <p></p>

                <h2>Информация</h2>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Епохата, в която живее и твори</h4></div>

                    <div class="panel-body">
                        <p>{{ $author->era }}</p>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Биографични бележки</h4></div>

                    <div class="panel-body">
                        <p>{{ $author->bio }}</p>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Творчество</h4></div>

                    <div class="panel-body">
                        <p>{{ $author->work }}</p>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Основни теми, проблеми и образи</h4></div>

                    <div class="panel-body">
                        <p>{{ $author->topics }}</p>

                    </div>
                </div>

                <h2>Произведения</h2>
                <p>Брой матуритетни произведения: <strong>{{ count($author->books) }}</strong></p>
                <ul class="list-group">
                    @foreach($author->books as $book)
                        <li class="list-group-item">
                            <a href="{{ route('authors.books.show', ['author_id' => $author->id, 'book_id' => $book->id]) }}">{{ $book->title }}</a>
                            <div class="pull-right">
                                <p><strong>
                                        <a href="{{ route('genres.show', ['id' => $book->genre->id]) }}">{{ $book->genre->name }} </a></strong>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <h2>Уводи</h2>
                <p>Брой уводи: <strong>{{ count($author->introductions) }}</strong></p>
                <div class="panel panel-default">

                    <div class="panel-body">
                        @foreach($author->introductions as $introduction)
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Източник: <strong>{{ $introduction->source }} </strong>
                                </div>
                                <div class="panel-body">
                                    <p>{{ $introduction->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
@endsection

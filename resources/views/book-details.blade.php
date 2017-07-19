@extends('layouts.app')

@section('title')
    laraLITerature - {{ $book->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $book->title }}</h1>
                <p></p>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Жанр</h4></div>

                    <div class="panel-body">
                        <a href="{{ route('genres.show', ['id' => $book->genre->id]) }}">{{ $book->genre->name }}</a>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Заглавие</h4></div>

                    <div class="panel-body">
                        <p>{{ $book->title_analysis }}</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Основна тема и проблеми</h4></div>

                    <div class="panel-body">
                        <p>{{ $book->topic }}</p>
                    </div>
                </div>

                @if($book->conflicts)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Конфликти</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->conflicts }}</p>
                        </div>
                    </div>
                @endif

                @if($book->plot)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Основни сюжетни моменти</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->plot }}</p>
                        </div>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Композиция</h4></div>

                    <div class="panel-body">
                        <p>{{ $book->composition }}</p>
                    </div>
                </div>

                @if($book->artistic_chronotope)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Художествено време и пространство</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->artistic_chronotope }}</p>
                        </div>
                    </div>
                @endif

                @if($book->lyrical_speaker)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Лирически говорител, лирически герои</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->lyrical_speaker }}</p>
                        </div>
                    </div>
                @endif

                @if($book->dominant_feelings)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Преобладаващи чувства</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->dominant_feelings }}</p>
                        </div>
                    </div>
                @endif

                @if($book->narrator)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Повествовател</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->narrator }}</p>
                        </div>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Основни образи и мотиви</h4></div>

                    <div class="panel-body">
                        <p>{{ $book->motives }}</p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Послания, идеи</h4></div>

                    <div class="panel-body">
                        <p>{{ $book->message }}</p>
                    </div>
                </div>


                @if($book->tropes)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Тропи и фигури</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->tropes }}</p>
                        </div>
                    </div>
                @endif

                @if($book->artistic_techniques)
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4>Художествени похвати</h4></div>

                        <div class="panel-body">
                            <p>{{ $book->artistic_techniques }}</p>
                        </div>
                    </div>
                @endif





                @if(count($book->characters) > 0)
                    <h2>Персонажна система</h2>
                    <ul class="list-group">
                        @foreach($book->characters as $character)
                            <li class="list-group-item">
                                <a href="{{ route('authors.books.characters.show', ['author_id' =>$book->author->id, 'book_id' => $book->id, 'id' => $character->id]) }}">{{ $character->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>

@endsection

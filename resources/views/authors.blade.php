@extends('layouts.app')

@section('title')
    laraLITerature - Автори
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Автори</h1>
                <p>Брой матуритетни автори: <strong>{{ count($authors) }}</strong></p>
                <ul class="list-group">
                    @foreach($authors as $author)
                        <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset('img/authors/' . $author->image_path) }}"
                                             alt="{{ $author->name }}" class="img-responsive" width="104" height="136">
                                    </div>
                                    <div class="col-md-6">
                                        <h3><a href="{{ route('authors.index') . '/' . $author->id }}">{{ $author->name }}</a></h3>
                                        <h4>({{ $author->born }} - {{ $author->died }})</h4>
                                        <p>Брой матуритетни произведения: <span class="enlarge highlight">{{ $author->mandatory_books_count }}</span></p>
                                    </div>
                                </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection

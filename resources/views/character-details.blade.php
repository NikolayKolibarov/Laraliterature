@extends('layouts.app')

@section('title')
    laraLITerature - {{ $character }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $character->name }}</h1>
                <p></p>
            </div>
        </div>
    </div>
@endsection

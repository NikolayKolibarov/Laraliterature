@extends('layouts.app')

@section('title')
    laraLITerature - Начало
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Laraliterature</h1>

            {{--<div class="panel panel-default search-panel">--}}
                {{--<div class="panel-heading">Търсене</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<p>Търсете автори, произведения, персонажи</p>--}}
                    {{--<form id="search-form">--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="keyword">Ключова дума:</label>--}}
                            {{--<input type="text" class="form-control" id="keyword" placeholder="Ключова дума..." name="keyword">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<label for="model">Какво търсиш?</label>--}}
                            {{--<select class="form-control" id="model">--}}
                                {{--<option value="authors">Автори</option>--}}
                                {{--<option value="books">Произведения</option>--}}
                                {{--<option value="characters">Персонажи</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<button class="btn btn-primary" id="search-button">Търси</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
</div>

@endsection

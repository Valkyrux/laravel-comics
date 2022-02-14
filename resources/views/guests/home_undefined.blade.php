@extends('guests.layout.base')

@section('document_title')
    {{Route::currentRouteName()}}
@endsection

@section('content')
    <div class="undefined-route">
        <div class="container">
            Welcome here!
            Now you are in: <h2 class="text-uppercase">{{Route::currentRouteName()}}!</h2>
        </div>
    </div>
@endsection

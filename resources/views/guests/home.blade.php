@extends('guests.layout.base')

@section('document_title')
    DC Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="main-label text-uppercase">Current series</div>
            <div class="d-flex flex-wrap justify-between card-container">
                @foreach($comics as $value)
                    <div class="card">
                        <div class="img-card-container">
                            <img src="{{$value['thumb']}}" alt="">
                        </div>
                        <h3>{{$value['series']}}</h3>
                    </div>
                @endforeach
            </div>
            <div class="button-container">    
                <button class="text-uppercase load-more">Load more</button>
            </div>
        </div>
    </main>
@endsection


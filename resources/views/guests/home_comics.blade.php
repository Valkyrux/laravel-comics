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
                    <a href="{{route('comic', $value['id'])}}" class="card">
                        <div class="img-card-container">
                            <img src="{{$value['thumb']}}" alt="">
                        </div>
                        <h3>{{$value['series']}}</h3>
                    </a>
                @endforeach
            </div>
            <div class="button-container">    
                <button class="text-uppercase load-more">Load more</button>
            </div>
        </div>
    </main>
    <nav class="nav-buy">
        <div class="container d-flex justify-between">
            <a href="#" class="text-uppercase d-flex"><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""> digital comics</a>
            <a href="#" class="text-uppercase d-flex"><img src="{{asset('img/buy-comics-merchandise.png')}}" alt=""> dc merchadise</a>
            <a href="#" class="text-uppercase d-flex"><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt=""> subscription</a>
            <a href="#" class="text-uppercase d-flex"><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt=""> comic shop locator</a>
            <a href="#" class="text-uppercase d-flex"><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt=""> dc power visa</a>
        </div>
    </nav>
@endsection


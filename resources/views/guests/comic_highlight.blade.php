@extends('guests.layout.base')

@section('document_title')
    {{Route::currentRouteName()}}
@endsection

@section('content')
    <div class="blue-line">
        <div class="container-small highlight-content d-flex">
            <img class="img-comic" src="{{$thumb}}" alt="">
            <div class="col-70">
                <h1>{{$title}}</h1>
                <div class="d-flex table-header">
                    <div class="col-70 d-flex justify-between">
                        <span><span class="opacity">U.S. Price:</span><span>{{$price}}</span></span>
                        <span class="text-uppercase opacity">available</span>
                    </div>
                    <div class="col-30">
                        <span>Check Availabity <i class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <p>{{$description}}</p>
            </div>
            <div class="col-30 text-right adv">
                <small class="text-uppercase">advertisement</small>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
        <div class="comic-info-box">
            <div class="container-small d-flex flex-wrap">
                <div class="col-50">
                    <h2>Talent</h2>
                    <div class="d-flex info-box">
                        <h3 class="col-30">
                            Art by:
                        </h3>
                        <p class="col-70">
                            @foreach ($artists as $artist)
                                {{$artist}} @if(!$loop -> last) {{', '}}@endif
                            @endforeach
                        </p>
                    </div>
                    <div class="d-flex info-box">
                        <h3 class="col-30">
                            Written by:
                        </h3>
                        <p class="col-70">
                            @foreach ($writers as $writer)
                                {{$writer}} @if(!$loop -> last) {{', '}}@endif
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-50">
                    <h2>Specs</h2>
                    <div class="d-flex info-box">
                        <h3 class="col-30">
                            Series:
                        </h3>
                        <p class="col-70">
                        {{$series}}
                        </p>
                    </div>
                    <div class="d-flex info-box">
                        <h3 class="col-30">
                            U.S. Price:
                        </h3>
                        <p class="col-70">
                            {{$price}}
                        </p>
                    </div>
                    <div class="d-flex info-box">
                        <h3 class="col-30">
                            On Sale Date:
                        </h3>
                        <p class="col-70">
                            {{$sale_date}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection

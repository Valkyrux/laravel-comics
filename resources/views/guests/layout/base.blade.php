<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('document_title')</title>
</head>
<body>
    @include('guests.partials.header')
    
    @yield('content')

    @include('guests.partials.footer')
</body>
</html>
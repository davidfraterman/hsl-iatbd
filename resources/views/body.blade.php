@extends('baseview')
@section('body')
    <body>
        @include('./layouts/header')
        @yield('content')
    </body>
@endsection
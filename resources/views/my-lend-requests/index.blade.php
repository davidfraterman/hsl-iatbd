

@section('title')
    {{"Aanvragen"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <h1 class="pageTitle myLendRequests__title">
        Mijn Aanvragen
        ({{$amount_of_lend_requests}})
    </h1>

    <article class="myLendRequestCards">
        @foreach ($lend_requests as $lend_request)
            @include('my-lend-requests.components.myLendRequestsCard--index')
        @endforeach
    </article>
    
</main>

@endsection
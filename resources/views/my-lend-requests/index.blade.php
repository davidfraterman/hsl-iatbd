

@section('title')
    {{"Aanvragen"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <h1 class="pageTitle myLendRequests__title">
        Leen Aanvragen
        ({{$amount_of_lend_requests}})
    </h1>

    <article class="myLendRequestCards">
        @foreach ($lend_requests as $lend_request)
            @include('my-lend-requests.components.myLendRequestsCard--index')
        @endforeach

        @if($amount_of_lend_requests == 0)
            <p>
                Je hebt op dit moment geen aanvragen.
            </p>
        @endif
    </article>
    
</main>

@endsection
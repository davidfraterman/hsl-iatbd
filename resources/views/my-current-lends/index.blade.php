@section('title')
    {{"Lenen & Uitlenen"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <article>
        <h2 class="pageTitle">Worden uitgeleend ({{$amount_of_lends}})</h2>
        <section class="u-card-grid">
            @foreach ($lends as $lend)
                @include('my-current-lends.components.myCurrentLendCard--index')
            @endforeach

            @if($amount_of_lends == 0)
                <p>
                    Niemand leent je producten op dit moment.
                </p>
            @endif
        </section>
    </article>
    <article>
        <h2 class="pageTitle">Ik leen nu ({{$amount_of_borrows}})</h2>
        <section class="u-card-grid">
            @foreach ($borrows as $borrow)
                @include('my-current-lends.components.myCurrentBorrowCard--index')
            @endforeach

            @if($amount_of_borrows == 0)
                <p>
                    Je leent op dit moment geen producten van iemand.
                </p>
            @endif
        </section>
    </article>
</main>

@endsection


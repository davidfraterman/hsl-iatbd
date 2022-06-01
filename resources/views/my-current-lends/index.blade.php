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
        </section>
    </article>
    <article>
        <h2 class="pageTitle">Ik leen nu ({{$amount_of_borrows}})</h2>
        <section class="u-card-grid">
            @foreach ($borrows as $borrow)
                @include('my-current-lends.components.myCurrentBorrowCard--index')
            @endforeach
        </section>
    </article>
</main>

@endsection


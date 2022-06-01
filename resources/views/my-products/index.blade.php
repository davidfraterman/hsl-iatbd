@section('title')
    {{"Mijn Producten"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <section class="myProducts__heading">
        <h1 class="pageTitle">Mijn Producten ({{$amount_of_products}})</h1>
        <a href="/my-products/create" class="myProducts__addBtn">+ Voeg een product toe</a>
    </section>
    <ul class="allProducts__list">
        @foreach ($products as $product)
            @include('my-products.components.myProductCard--index')
        @endforeach

        @if($amount_of_products == 0)
            <p>
                Je hebt op dit moment geen producten toegevoegd, maak er een aan door op de knop rechtsboven te klikken.
            </p>
        @endif
    </ul>
</main>

@endsection
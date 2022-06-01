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
    </ul>
</main>

@endsection
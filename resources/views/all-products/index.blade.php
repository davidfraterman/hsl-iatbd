@section('title')
    {{"All Products"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <h1 class="pageTitle">Alle Beschikbare Producten</h1>
    <ul class="allProducts__list">
        @foreach ($products as $product)
            @include('all-products.components.productCard--index')
        @endforeach
    </ul>
</main>

@endsection
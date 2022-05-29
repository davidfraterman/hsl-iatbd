@section('title')
    {{"My Products"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <h1 class="pageTitle">Mijn Producten ({{$amount_of_products}})</h1>
    <ul class="allProducts__list">
        @foreach ($products as $product)
            @include('my-products.components.myProductCard--index')
        @endforeach
    </ul>
    
</main>

@endsection
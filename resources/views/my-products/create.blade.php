@section('title')
    {{"Add Product"}}
@endsection

@extends('body')
@section('content')

<main>
    @foreach ($products as $product)
        @include('all-products.components.productCard--index')
    @endforeach
</main>

@endsection
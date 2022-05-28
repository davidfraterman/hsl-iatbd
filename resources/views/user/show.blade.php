@section('title')
    {{"Add Product"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <article class="userProfile">
        <section>
            <h2 class="userProfile__userName pageTitle">
                {{$user->name}}
            </h2>
            <p class="userProfile__userEmail">
                {{$user->email}}
            </p>
        </section>
        <section>
            <h3>{{$user->name}}'s Producten</h3>
            <ul class="allProducts__list">
                @foreach ($products as $product)
                    @include('all-products.components.productCard--index')
                @endforeach
            </ul>
        </section>
    </article>
</main>

@endsection
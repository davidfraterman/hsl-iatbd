@section('title')
    {{"All Products"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <section class="breadCrumbs">All Products > {{$product->category}} > {{$product->name}}</section>
    <article class="oneProduct">
        <figure class="oneProduct__figure">
            <img src="/img/{{$product->image}}" alt="{{$product->description}}" class="oneProduct__image">
        </figure>
        <section class="oneProduct__content">
            <h1 class="oneProduct__title">{{$product->name}}</h1>
            <section class="oneProduct__description">
                {{$product->description}}
            </section>
            <section class="oneProduct__info">
                <section class="maxLendTime">
                    <span class="iconify" data-icon="akar-icons:clock" style="font-size: 15px;"></span>
                    max. {{$product->max_lend_time}}
                </section>
                <section class="categoryItem">
                    {{$product->category}}
                </section>
            </section>
            <a href="/users/{{$product_owner->id}}" class="oneProduct__productOwner">
                <span class="iconify" data-icon="bxs:user" style="color: var(--clr-black); font-size: 25px;"></span>
                <section class="oneProduct__productOwner--details">
                    <p>
                        Owner: {{$product_owner->name}}
                    </p>
                    <p>
                        E-mail: {{$product_owner->email}}
                    </p>
                </section>
            </a>
            <button class="primaryButton">Lenen</button>
        </section>
        
    </article>
</main>

@endsection
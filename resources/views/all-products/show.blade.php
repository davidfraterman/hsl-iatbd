@section('title')
    {{'Product ' . $product->name}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <section class="breadCrumbs">All Products > {{$product->category}} > {{$product->name}}</section>
    <article class="oneProduct">
        <figure class="oneProduct__figure">
            <img src="{{$product->image}}" alt="{{$product->description}}" class="oneProduct__image">
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
                        Eigenaar:
                        @if(Auth::user()->id == $product->owner_id)
                            Ik
                        @else
                            {{$product_owner->name}}
                        @endif
                    </p>
                    <p>
                        E-mail: {{$product_owner->email}}
                    </p>
                </section>
            </a>

            @if($is_already_lent_out == 0 && $has_user_already_requested == 0)
                @if(Auth::user()->id != $product->owner_id)
                    <form method="POST" action="/my-lend-requests/create">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <button type="submit" class="primaryButton">Product Aanvragen</button>
                    </form>  
                @elseif(Auth::user()->id == $product->owner_id)
                    <button type="submit" class="disabledButton">Je kan niet je eigen product lenen</button>
                @endif
            @endif

            @if($has_user_already_requested == 1)
                <button type="submit" class="disabledButton">Je hebt dit product aangevraagd</button>
            @elseif($is_already_lent_out == 1)
                <button type="submit" class="disabledButton">Product niet beschikbaar</button>
            @endif

            @if(Auth::user()->role == 'admin')
                <h3 class="adminFunctions__title">Admin Functies</h3>  
                
                <form method="POST" action="/products/{{$product->id}}/delete">
                    <input name="_method" type="hidden" value="DELETE">
                    @csrf
                    <button type="submit" class="redButton">Product Verwijderen</button>
                </form>
            @endif
        </section>
        
    </article>
</main>

@endsection
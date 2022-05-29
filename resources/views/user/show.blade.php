@section('title')
    {{"Add Product"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <article class="userProfile">
        <section class="userProfile__userInfo">
            <h2 class="userProfile__userName">
                <!-- user icon -->
                <span class="iconify" data-icon="bxs:user" style="color: var(--clr-black); font-size: 30px;"></span>
                {{$user->name}}
            </h2>
            <p class="userProfile__userEmail">
                E-mail:
                {{$user->email}}
            </p>
            <p> 
                Aantal Reviews: {{$amount_of_ratings}}
            </p>
            <p>
                Gemiddelde Beoordeling: {{$average_rating}}/5
            </p>
            
            
        </section>
        <section class="userProducts">
            <h3 class="userProfile__subTitle">{{$user->name}}'s Producten</h3>
            <ul class="allProducts__list">
                @foreach ($products as $product)
                    @include('all-products.components.productCard--index')
                @endforeach
            </ul>
        </section>

        <section class="userRatings">
            <h3 class="userProfile__subTitle">{{$user->name}}'s Reviews ({{$amount_of_ratings}})</h3>
            <ul class="allRatings__list">
                @foreach ($ratings as $rating)
                    @include('user.components.reviewCard--show')
                @endforeach
            </ul>
        </section>
    </article>
</main>

@endsection
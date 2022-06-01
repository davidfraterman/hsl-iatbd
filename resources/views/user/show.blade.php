@section('title')
    {{'Gebruiker ' . $user->name}}
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
                @if($user->role == 'blocked')
                    <p class="userProfile__bannedText">(Geblokkeerde gebruiker)</p>
                @endif

            </h2>
            <p class="userProfile__userInfoWithIcon">
                <span class="iconify" data-icon="bx:bx-envelope" style="color: var(--clr-primary); font-size: 18px;"></span>
                {{$user->email}}
            </p>
            <p class="userProfile__userInfoWithIcon">
                <!-- star icon -->
                <span class="iconify" data-icon="bx:bx-star" style="color: var(--clr-primary); font-size: 18px;"></span>
                {{round($average_rating, 1);}}/5 Gebaseerd op {{$amount_of_ratings}} beoordelingen
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

        @if(Auth::user()->role == 'admin' && $user->id != Auth::user()->id && $user->role != 'blocked') 
            <h3 class="adminFunctions__title">Admin Functies</h3>    

            <form method="GET" action="/users/{{$user->id}}/block">
                @csrf
                <button type="submit" class="redButton">Gebruiker Blokkeren</button>
            </form>
        @elseif(Auth::user()->role == 'admin' && Auth::user()->id == $user->id)    
            <h3 class="adminFunctions__title">Admin Functies</h3>
            <button class="redButton disabledButton">Je kan jezelf niet blokkeren</button>
        @elseif($user->role == 'blocked')
            <h3 class="adminFunctions__title">Admin Functies</h3>

            <form method="GET" action="/users/{{$user->id}}/unblock">
                @csrf
                <button type="submit" class="redButton">Blokkering Opheffen</button>
            </form>
        @endif
    </article>
</main>

@endsection
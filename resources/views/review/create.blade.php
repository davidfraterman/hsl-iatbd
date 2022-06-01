@section('title')
    {{"Maak Product Aan"}}
@endsection

@extends('body')
@section('content')

<main>
    <article class="formContainer">
        <form class="formCard" action="/users/{{$lender_id}}/review/create" method="POST">
            <a href="/my-current-lends">
                <span  class="formCard__backBtn iconify" data-icon="bx:bx-arrow-back" data-inline="false"></span>
            </a>
            <h1 class="formCard__title">Review voor eigenaar</h1>
            @csrf
            <input type="hidden" value="{{$lender_id}}" name="lender_id">

            <label class="formCard__inputGroup" for="rating">
                Aantal sterren
                <input class="formCard__textInput" name="rating" id="rating" type="number"/>
            </label>

            <label class="formCard__inputGroup" for="comment">
                Commentaar
                <input class="formCard__textInput" name="comment" id="comment" type="text"/>
            </label>

            <button class="primaryButton" type="submit">Review Plaatsen</button>
        </form>
    </article>
</main>

@endsection
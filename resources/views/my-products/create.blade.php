@section('title')
    {{"Add Product"}}
@endsection

@extends('body')
@section('content')

<main>
    <article class="create-form">
    <form class="create-form__form" action="/my-products" method="POST">
        @csrf
        <label for="name">Naam</label>
        <input name="name" id="name" type="text"/>

        <label for="category">Categorie</label>
        <select name="category" id="category">
            @foreach($categories as $category)
                <option value="{{$category->category}}">{{$category->category}}</option>
            @endforeach
        </select>

        <label for="max_lend_time">Maximale Leen Periode</label>
        <select name="max_lend_time" id="max_lend_time">
            @foreach($periods as $period)
                <option value="{{$period->period}}">{{$period->period}}</option>
            @endforeach
        </select>


        <label for="description">Beschrijving</label>
        <input name="description" id="description" type="text"/>


        <button type="submit">Product Aanmaken</button>
    </form>
</article>
</main>

@endsection
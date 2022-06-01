@section('title')
    {{"Maak Product Aan"}}
@endsection

@extends('body')
@section('content')

<main>
    <article class="formContainer">
      
        <form class="formCard" action="/my-products/create" method="POST" enctype="multipart/form-data">
            <a href="/my-products">
                <span  class="formCard__backBtn iconify" data-icon="bx:bx-arrow-back" data-inline="false"></span>
            </a>
            <h1 class="formCard__title">Voeg product toe</h1>
            @csrf
            <label class="formCard__inputGroup" for="name">
                Product naam

                <input class="formCard__textInput" name="name" id="name" type="text" required/>
            </label>

            <label class="formCard__inputGroup" for="category">
                Categorie

                <select class="formCard__textInput" name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </label>

            <label class="formCard__inputGroup" for="max_lend_time">
                Maximale Leen Periode

                <select class="formCard__textInput" name="max_lend_time" id="max_lend_time">
                    @foreach($periods as $period)
                        <option value="{{$period->period}}">{{$period->period}}</option>
                    @endforeach
                </select>
            </label>

            <label for="image">
                <input type="file" class="form-control" accept="image/*" name="image">    
            </label>

            <label class="formCard__inputGroup" for="description">
                Beschrijving
                <textarea  class="formCard__textInput" rows="4" cols="50" name="description" id="description" value="" type="text" required></textarea>
                
            </label>

            <button class="primaryButton" type="submit">Product Aanmaken</button>
        </form>
    </article>
</main>

@endsection
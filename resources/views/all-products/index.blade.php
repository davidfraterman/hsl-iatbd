@section('title')
    {{"Alle Producten"}}
@endsection

@extends('body')
@section('content')

<main class="container">
    <h1 class="pageTitle">Alle Beschikbare Producten</h1>
    <section class="allProducts__filters">
        <section class="allProducts__filterInputs">
            <label class="allProducts__searchSection">
                Zoeken
                <input class="formCard__textInput" type="text" id="js--allProducts__searchBox" placeholder="Typ iets" name="all-products-searchbox">
            </label>
            <label class="allProducts__searchSection">
                Categorie
                <select class="formCard__textInput" name="category" id="js--allProducts__categoryFilter">
                    <option value="Alles">Alles</option>
                    @foreach($categories as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                    @endforeach
                </select>
            </label>
        </section>
        
        <button class="secondaryButton allProducts__searchBtn" id="js--allProducts__searchBtn">Zoeken</button>
    </section>
    <ul class="allProducts__list">
        @foreach ($products as $product)
            @include('all-products.components.productCard--index')
        @endforeach
    </ul>
</main>

@endsection
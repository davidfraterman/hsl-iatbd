<li class="allProducts__listItem" data-category="{{$product->category}}">
    <article>
        <figure class="allProducts__listItem--figure">
            <img class="allProducts__listItem--image" src="/img/{{$product->image}}" alt="{{$product->description}}">
             <section class="allProducts__listItem--owner">
                <a href="/users/{{$product->owner_id}}">
                    <span class="iconify" data-icon="bxs:user" style="color: var(--clr-white); font-size: 15px;"></span>
                    {{$product->owner_name}}
                </a>
            </section>
        </figure>
        
        <section class="allProduct__listItem--content">

           

            <h2 class="allProducts__listItem--title">{{$product->name}}</h2>
            <section class="allProducts__listItem--description">
                {{$product->description}}
            </section>
            <section class="allProducts__listItem--info">
                <section class="maxLendTime">
                    <span class="iconify" data-icon="akar-icons:clock" style="font-size: 15px;"></span>
                    max. {{$product->max_lend_time}}
                </section>
                <section class="categoryItem">
                    {{$product->category}}
                </section>
            </section>
            
            <button onclick="location.href='/products/{{$product->id}}'" type="button" class="primaryButton">Bekijk Product</button>
        </section>
    </article>
</li>
<article class="myCurrentLendsCard">
    <p>
        <a class="u-text-link" href="/users/{{$lend->borrower_id}}">
            {{$lend->borrower_name}}
        </a>
        leent nu je 
        <a class="u-text-link" href="/products/{{$lend->product_id}}">
            {{$lend->product_name}}.
        </a>
    </p>
</article>
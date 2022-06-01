<article class="myCurrentLendsCard">
    <p>
        Je leent nu een 
        <a class="u-text-link" href="/products/{{$borrow->product_id}}">
            {{$borrow->product_name}}
        </a>     
        van 
        <a class="u-text-link" href="/users/{{$borrow->product_owner_id}}">
            {{$borrow->lender_name}}.
        </a>  
    </p>
    <form method="POST" action="/my-current-lends/delete">
        <input name="_method" type="hidden" value="DELETE">
        @csrf
        <input type="hidden" value="{{$borrow->product_id}}" name="product_id">
        <input type="hidden" value="{{$borrow->borrower_id}}" name="borrower_id">
        <button type="submit" class="secondaryButton">Inleveren</button>
    </form>
    
</article>
<article class="myCurrentLendsCard">
    <h2 class="myCurrentLendsCard__title">{{$lend_request->product_name}}</h2>
    <p class="myCurrentLendsCard__text">
        <a class="u-text-link" href="/users/{{$lend_request->requester_id}}">
            {{$lend_request->borrower_name}}
        </a>  wil graag jou   
        <a class="u-text-link" href="/products/{{$lend_request->product_id}}">
            {{$lend_request->product_name}}
        </a>   
        
        lenen.
    </p>
    
    <form method="POST" action="/my-current-lends/create">
        @csrf
        <input type="hidden" value="{{$lend_request->product_id}}" name="product_id">
        <input type="hidden" value="{{$lend_request->requester_id}}" name="requester_id">
        <button type="submit" class="primaryButton">Accepteren</button>
    </form>

    <form method="POST" action="/my-lend-requests/delete">
        <input name="_method" type="hidden" value="DELETE">
        @csrf
        <input type="hidden" value="{{$lend_request->product_id}}" name="product_id">
        <input type="hidden" value="{{$lend_request->requester_id}}" name="requester_id">
        <button type="submit" class="secondaryButton">Weigeren</button>
    </form>
    
</article>
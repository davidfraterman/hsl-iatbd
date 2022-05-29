<!-- review -->
<article class="reviewCard">
    <section class="reviewCard__heading">
        <a href="/users/{{$rating->user_id}}">
            <section class="reviewCard__reviewer">
                <!-- user icon -->
                <span class="iconify" data-icon="bxs:user" style="color: var(--clr-primary); font-size: 18px;"></span>
                {{$rating->reviewer_name}}
            </section>
        </a>
        <section class="reviewCard__stars">
            {{$rating->rating}}
            <span class="iconify" data-icon="bx:bx-star" style="color: var(--clr-primary); font-size: 18px;"></span>
        </section>
    </section>
    
    <section class="reviewCard__comment">
        {{$rating->comment}}
    </section>
</article>
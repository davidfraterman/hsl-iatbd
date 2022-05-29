<!-- review -->
<article class="reviewCard">
    <a href="/users/{{$rating->user_id}}">
        <section class="reviewCard__reviewer">
            <!-- user icon -->
            <span class="iconify" data-icon="bxs:user" style="color: var(--clr-primary); font-size: 18px;"></span>
            {{$rating->reviewer_name}}
        </section>
    </a>
    <section class="reviewCard__stars">
        <strong>{{$rating->rating}}/5</strong>
    </section>
    <section class="reviewCard__comment">
        {{$rating->comment}}
    </section>
</article>
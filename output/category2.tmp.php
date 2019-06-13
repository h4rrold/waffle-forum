<div class="categories-cards__categories-cards-item">
    <a href="{{ROUTE_PATH}}/community/categories/{{$id}}/{{$name}}" class="categories-cards-item">
        <div class="categories-cards-item__icon">
            <i class="{{$imgs}}"></i>
        </div>
        <div class="categories-cards-item__card-title">
            <div class="card-title">{{$name}}</div>
        </div>
        <div class="categories-cards-item__card-stat">
            <div class="card-stat"><span class="card-stat__amount-topics">{{$amount_of_topics}}</span>тем та повідомлень<span class="card-stat__amount-posts">{{$amount_of_posts}}</span></div>
        </div>
    </a>
</div>
<div class="bottom-padding col-sm-12 col-md-12">
    <div class="title-box">
        <a href="{{ url($user->name . '/article/published') }}" class="btn btn-default">All articles <span class="glyphicon glyphicon-arrow-right"></span></a>
        <h2 class="title">Latest articles</h2>
    </div>
    <ul class="latest-posts">
        @foreach ($articles as $article)
            <li>
                <img class="replace-2x image img-circle" src="content/img/product-1.jpg" alt="" title="" width="84" height="84">
                <div class="meta">
                    <span>{{ $user->name }}</span>,
                    <span class="time">{{ $article->published_at }}</span>
                </div>
                <div class="description">
                    <a href="{{ url($user->name . '/article/' . $article->id) }}">
                        {!!  $article->excerpt !!}
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>


<div class="container">
    <div class="row">
        <div class="content blog col-sm-9 col-md-9">
            @foreach ($articles as $article)
                <article class="post">
                    <h2 class="entry-title"><a href="{{ url('/article/' . $article->id) }}">{!! $article->title !!}</a></h2>
                    <div class="entry-content">
                        {!! $article->excerpt !!}
                    </div>
                    @include('partials._entry_meta')
                </article><!-- .post -->
            @endforeach

            <div class="pagination-box">
                {{ $articles->links() }}
            </div><!-- .pagination-box -->
        </div><!-- .content -->

        @include('frontend.include.sidebar')

    </div>
</div><!-- .container -->


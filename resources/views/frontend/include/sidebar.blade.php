<div id="sidebar" class="sidebar col-sm-3 col-md-3">
    <aside class="widget list">
        <header>
            <h3 class="title">Blog Categories</h3>
        </header>
        <ul>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Fashion</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Vacation</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Food</a></li>
        </ul>
    </aside><!-- .list -->

    <aside class="widget list">
        <header>
            <h3 class="title">Archives</h3>
        </header>
        <ul>
            <li><a href="#">August 2012</a></li>
            <li><a href="#">September 2012</a></li>
            <li><a href="#">October 2012</a></li>
            <li><a href="#">November 2012</a></li>
            <li><a href="#">December 2012</a></li>
        </ul>
    </aside><!-- .list -->

    <aside class="widget tags">
        <header>
            <h3 class="title">Tags</h3>
        </header>
        <ul class="clearfix">
            @foreach ($tags as $tag)
                <li><a href="{{ url('/tag/' . $tag->name) }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    </aside><!-- .tags -->
</div><!-- .sidebar -->


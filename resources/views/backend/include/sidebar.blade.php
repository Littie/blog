<div id="sidebar" class="sidebar col-sm-12 col-md-3">
    <aside class="widget menu">
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                @if($isBlog)
                    <li class="parent active">
                        <a href="#"><span class="open-sub"></span>Posts</a>
                        <ul class="sub">
                            <li><a href="{{ url($user->name . '/article/create') }}">Create</a></li>
                            <li><a href="{{ url($user->name . '/article/published') }}">View published</a></li>
                            <li><a href="{{ url($user->name . '/article/unpublished') }}">View unpublished</a></li>
                            <li><a href="{{ url($user->name . '/article/all') }}">View all</a></li>
                        </ul>
                    </li>
                    {{--<li class="parent">--}}
                        {{--<a href="#"><span class="open-sub"></span>Blog</a>--}}
                        {{--<ul class="sub">--}}
                            {{--<li><a href="#">View</a></li>--}}
                            {{--<li><a href="#">Edit</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="parent">--}}
                        {{--<a href="#"><span class="open-sub"></span>Profile</a>--}}
                        {{--<ul class="sub">--}}
                            {{--<li><a href="#">View</a></li>--}}
                            {{--<li><a href="#">Edit</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                @endif
            </ul>
        </nav>
    </aside>
</div>


@extends('frontend.layouts.app')

@section('content')
    <div class="page-box">
        <div class="page-box-content">

            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">Our blogs</h1>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="content blog col-sm-9 col-md-9">
                            @foreach ($blogs as $blog)
                                <article class="post">
                                    <h2 class="entry-title"><a href="{{ url('/blog/' . $blog->user->blog['id']) }}">{!! $blog->name !!}</a></h2>
                                    <div class="entry-content">
                                        {!! $blog->description !!}
                                    </div>
                                    <footer class="entry-meta">
                                        <span class="autor-name">{{ $blog->user['name'] }}</span>,
                                        <span class="time">{{ $blog->created_at->diffForHumans() }}</span>
                                        <span class="separator">|</span>
                                        <span class="meta">Tags: <a href="#">Sports</a>, <a href="#">Movies</a></span>
                                    </footer>
                                </article><!-- .post -->
                            @endforeach


                            <div class="pagination-box">
                                {{ $blogs->links() }}
                            </div><!-- .pagination-box -->
                        </div><!-- .content -->

                        @include('frontend.include.sidebar')

                    </div>
                </div><!-- .container -->
            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->
    <div class="clearfix"></div>
@stop




@extends('frontend.layouts.app')

@section('content')
    <div class="page-box">
        <div class="page-box-content">

            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">{{ $blog->name }}</h1>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="content blog col-sm-9 col-md-9">
                            @foreach ($articles as $article)
                                <article class="post">
                                    <h2 class="entry-title"><a href="{{ url('/article/' . $article->id) }}">{!! $article->title !!}</a></h2>
                                    <div class="entry-content">
                                        {!! $article->excerpt !!}
                                    </div>
                                    <footer class="entry-meta">
                                        <span class="autor-name">{{ $user->name }}</span>,
                                        <span class="time">{{ $article->published_at->diffForHumans() }}</span>
                                        <span class="separator">|</span>
                                        <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
			                            <span class="comments-link pull-right">
			                                <a href="#"><i class="fa fa-comment"></i> 3 comment(s)</a>
			                            </span>
                                    </footer>
                                </article><!-- .post -->
                            @endforeach


                            <div class="pagination-box">
                                {{ $articles->links() }}
                                {{--<i class="pagination-text">Displaying {{ $articles->total() > 0 ? $articles->currentPage() *  $articles->perPage(): '0' }} to {{ $articles->hasMorePages() ? $articles->total() : $articles->total() == 0 ? '0' : $articles->perPage()}} (of {{ $articles->total() }} posts)</i>--}}
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


@extends('frontend.layouts.app')

@section('content')
    <div class="page-box">
        <div class="page-box-content">
            <section id="main">
                <header class="page-header">
                    <div class="container">
                        <h1 class="title">{{ $article->title }}</h1>
                    </div>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="content blog blog-post col-sm-9 col-md-9">
                            <article class="post">
                                <div class="entry-content">
                                    {!! $article->body !!}
                                </div>
                                <footer class="entry-meta">
                                    <span class="autor-name">{{ $user->name }}</span>,
                                    <span class="time">{{ $article->published_at->diffForHumans() }}</span>
                                    <span class="separator">|</span>
                                    <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
                        			<span class="comments-link pull-right">
			                            <a href="{{ url('/article/' . $article->id) . '#comment'}}"><i class="fa fa-comment"></i> {{ $article->comments()->count() }} comment(s)</a>
			                        </span>
                                </footer>
                            </article><!-- .post -->

                            @include('frontend.include.comments')

                        </div><!-- .content -->

                        @include('frontend.include.sidebar')

                    </div>
                </div><!-- .container -->
            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->


    <div class="clearfix"></div>
@stop


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

                                @include('partials._entry_meta')

                            </article><!-- .post -->

                            @include('partials._comments')

                        </div><!-- .content -->

                        @include('frontend.include.sidebar')

                    </div>
                </div><!-- .container -->
            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->


    <div class="clearfix"></div>
@stop


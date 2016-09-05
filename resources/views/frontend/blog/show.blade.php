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

                @include('partials._articles_list_container')

            </section><!-- #main -->

        </div><!-- .page-box-content -->
    </div><!-- .page-box -->
    <div class="clearfix"></div>
@stop


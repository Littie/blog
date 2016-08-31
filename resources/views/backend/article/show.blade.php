@extends('backend.layouts.app')

@section('content')
    <div class="col-sm-12 col-md-12">
        <div class="content-block bottom-padding frame-shadow-raised">
            <h2 class="text-center">{{ $article->title }}</h2>
            {!! $article->body !!}

            <div class="entry-meta">
                <span class="autor-name">{{ $user->name }}</span>,
                <span class="time">{{ $article->published_at->diffForHumans() }}</span>
                <span class="separator">|</span>
                <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
					<span class="comments-link pull-right">
					  <a href="#"><i class="fa fa-comment"></i> 3 comment(s)</a>
					</span>
            </div>
        </div>
    </div>

@stop




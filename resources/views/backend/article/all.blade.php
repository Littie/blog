@extends('backend.layouts.app')

@section('content')
    <div class="bottom-padding col-sm-12 col-md-12">
        @foreach($articles as $article)
            <div class="row">
                <div class="post">
                    <h2 class="entry-title"><a href="{{ url($user->name . '/article/' . $article->id) }}">{{ $article->title }}</a></h2>
                    <div class="entry-content">
                        {!!  $article->excerpt !!}
                    </div>

                    <div class="entry-meta">
                        <span class="autor-name">{{ $user->name }}</span>,
                        <span class="time">{{ $article->published_at }}</span>
                        <span class="separator">|</span>
                        <span class="meta">Posted in <a href="#">Sports</a>, <a href="#">Movies</a></span>
					<span class="comments-link pull-right">
					  <a href="#"><i class="fa fa-comment"></i> 3 comment(s)</a>
					</span>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $articles->links() }}

    </div>
@stop


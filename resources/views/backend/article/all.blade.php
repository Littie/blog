@extends('backend.layouts.app')

@section('content')
    <div class="bottom-padding col-sm-12 col-md-12">
        @if(Session::has('ARTICLE_HAS_BEEN_DELETED'))
            <h4 class="title text-center text-success"><strong>{{ Session::get('ARTICLE_HAS_BEEN_DELETED') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </h4>
        @endif

        <h3 class="text-center">{{ $title }}</h3>

        @foreach($articles as $article)
            <div class="row">
                <div class="post">
                    <div class="entry-meta">
					    <span class="comments-link pull-right">
					        <a href="{{ url($user->name . '/article/' . $article->id) }}" data-method="delete" data-token="{{csrf_token()}}"><i class="fa fa-eraser"> Delete</i></a>
					    </span>
                        <span class="separator pull-right">|</span>
                        <span class="comments-link pull-right">
					        <a href="{{ url($user->name . '/article/edit/' . $article->id) }}"><i class="fa fa-edit"> Edit</i></a>
					    </span>
                    </div>
                    <h2 class="entry-title"><a href="{{ url($user->name . '/article/' . $article->id) }}">{{ $article->title }}</a></h2>
                    <div class="entry-content">
                        {!!  $article->excerpt !!}
                    </div>

                    <div class="entry-meta">
                        <span class="autor-name">{{ $user->name }}</span>,
                        <span class="time">{{ $article->published_at->diffForHumans() }}</span>
                        <span class="separator">|</span>
                        <span class="meta">Posted in
                            @foreach ($article->tags as $tag)
                                <a href="#">{{ $tag->name }}</a>
                            @endforeach
                        </span>
					<span class="comments-link pull-right">
					  <a href="{{ url($user->name . '/article/' . $article->id) . '#comment'}}"><i class="fa fa-comment"></i> {{ $article->comments()->count() }} comment(s)</a>
					</span>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach

        {{ $articles->links() }}

    </div>
@stop


<footer class="entry-meta">
    <span class="time">{{ $article->published_at->diffForHumans() }}</span>

    @if($article->tags()->count() > 0)
        <span class="separator">|</span>
        <span class="meta">Posted in
            @endif
            @foreach ($tags as $tag)
                @if ($article->tags->contains($tag->id))
                    <a href="{{ url('/tag/' . $tag->name) }}">{{ $tag->name }}</a>
                @endif
            @endforeach
         </span>
        <span class="comments-link pull-right">
			  <a href="{{ url($user->name . '/article/' . $article->id) . '#comment'}}"><i class="fa fa-comment"></i> {{ $article->comments()->count() }} comment(s)</a>
		</span>
</footer>


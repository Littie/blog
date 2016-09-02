<h3 class="title slim">Comments</h3>
<ul class="commentlist"><a name="comment"></a>
    @if ($article->comments()->count() > 0)
        @foreach ($article->comments as $comment)
            <li>
                <img class="replace-2x avatar" width="84" height="84" src="content/img/avatar-1.jpg" alt="">
                <div class="meta">
                    <span>{{ $user->name }}</span>,
                    <span class="time">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="description">
                    {!! $comment->comment !!}
                </p>
            </li>
        @endforeach
    @endif
</ul>

<h3 class="title slim">Leave a Reaply</h3>

<form class="comments-form" role="form" method="POST" action="{{ url('/comment/store') }}">
    {{ csrf_field() }}
    <input type="hidden" name="article_id" value="{{ $article->id }}">

    <label for="comment">Comment: <i class="required">*</i> </label>
    <div class="row">
        <div class="comment-box col-sm-10 col-md-10 {{ $errors->has('comment')? ' has-error ' : '' }}">
            <textarea class="form-control" id="comment" name="comment"></textarea>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="button-set">
        <span class="required pull-right"><b>*</b> Required Field</span>
        <button class="btn btn-default">Send</button>
    </div>
</form>


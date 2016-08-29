@extends('backend.layouts.app')

@section('content')
    <div class="col-sm-12 col-md-12">
        <div class="content-block bottom-padding frame-shadow-raised">
            <h2 class="text-center">{{ $article->title }}</h2>
            {!! $article->body !!}
        </div>
    </div>

@stop




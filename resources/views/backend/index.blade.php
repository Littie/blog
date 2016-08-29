@extends('backend.layouts.app')

@section('content')
    @if (!$isBlog)
        @include('backend.include.create_blog')
    @else
        @include('backend.include.last_posts')
    @endif
@endsection



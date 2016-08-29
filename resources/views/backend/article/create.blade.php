@extends('backend.layouts.app')

@section('content')
    <div class="back-end">
        <div class="form-content">
            <form class="form-box register-form form-validator" role="form" method="POST" action="{{ url($user->name . '/article/store') }}">
                {{ csrf_field() }}

                @if(Session::has('ARTICLE_WAS_ADDED'))
                    <strong><h4 class="title text-center text-success">{{ Session::get('ARTICLE_WAS_ADDED') }}</h4></strong>
                @endif

                <h3 class="title">Create new article </h3>

                <div class="form-group{{ $errors->has('title')? ' has-error ' : '' }}">
                    <label for="title">Article Title: <span class="required">*</span></label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ old('title') }}">

                    @if ($errors->has('title'))
                        <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('published_at')? ' has-error ' : '' }}">
                    <label for="published_at">Article published time: <span class="required">*</span></label>
                    <input class="form-control datepicker-box" type="text" id="published_at" name="published_at" value="{{ old('published_at') }}">

                    @if ($errors->has('published_at'))
                        <span class="help-block">
                        <strong>{{ $errors->first('published_at') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('excerpt')? ' has-error ' : '' }}">
                    <label for="excerpt">Article Excerpt: <span class="required">*</span></label>
                    <textarea class="form-control" id="excerpt" name="excerpt" rows="3">{{ old('excerpt') }}</textarea>

                    @if ($errors->has('excerpt'))
                        <span class="help-block">
                        <strong>{{ $errors->first('excerpt') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('body')? ' has-error ' : '' }}">
                    <label for="body">Article Text: <span class="required">*</span></label>
                    <textarea class="form-control" id="body" name="body" rows="5">{{ old('body') }}</textarea>

                    @if ($errors->has('body'))
                        <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="buttons-box clearfix">
                    <button class="btn btn-default create">Create article</button>
                    <span class="required"><b>*</b> Required Field</span>
                </div>
            </form><!-- .form-box -->
        </div>
    </div><!-- .back-end -->


@stop


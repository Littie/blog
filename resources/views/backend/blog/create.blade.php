@extends('backend.layouts.app')

@section('content')
    <div class="back-end">
        <div class="form-content">
            <form class="form-box register-form form-validator" role="form" method="POST" action="{{ url('/blog/store') }}">
                {{ csrf_field() }}

                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <h3 class="title">Create new blog </h3>
                <p>Bla bla bla bla bla bla bla bla bla</p>

                <div class="form-group{{ $errors->has('name')? ' has-error ' : '' }}">
                    <label for="name">Blog Name: <span class="required">*</span></label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">

                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description')? ' has-error ' : '' }}">
                    <label for="description">Blog Description: <span class="required">*</span></label>
                    <input class="form-control" type="text" id="description" name="description" value="{{ old('description') }}">

                    @if ($errors->has('description'))
                        <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="buttons-box clearfix">
                    <button class="btn btn-default create">Create blog</button>
                    <span class="required"><b>*</b> Required Field</span>
                </div>
            </form><!-- .form-box -->
        </div>
    </div><!-- .back-end -->


@stop


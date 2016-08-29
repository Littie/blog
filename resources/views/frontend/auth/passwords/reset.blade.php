@extends('frontend.layouts.app')

@section('content')
    <section id="main" class="page-login-promo">
        <div class="container login-register">
            <div class="row">
                <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <div class="front-end">
                        <div class="form-content">
                            <form class="form-box login-form form-validator" role="form" method="POST" action="{{ url('/password/reset') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="token" value="{{ $token }}">

                                <h3 class="title">Reset Password</h3>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Email Address <span class="required">*</span></label>
                                    <input class="form-control" type="email" id="email" name="email" value="{{ $email or old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password')? ' has-error ' : '' }}">
                                    <label for="password">Password: <span class="required">*</span></label>
                                    <input class="form-control" type="password" id="password" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <label for="password_confirmation">Confirm Password: <span class="required">*</span></label>
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">

                                <div class="buttons-box clearfix">
                                    <button class="btn btn-default" type="submit">Reset Password</button>
                                    <span class="required"><b>*</b> Required Field</span>
                                </div>
                            </form><!-- .form-box -->
                        </div>
                    </div><!-- .front-end -->
                </div>
            </div>
        </div>
    </section>
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-heading">Reset Password</div>--}}

    {{--<div class="panel-body">--}}
    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="hidden" name="token" value="{{ $token }}">--}}

    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control" name="password">--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
    {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation">--}}

    {{--@if ($errors->has('password_confirmation'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-6 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--<i class="fa fa-btn fa-refresh"></i> Reset Password--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

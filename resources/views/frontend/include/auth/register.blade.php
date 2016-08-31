<div class="back-end">
    <div class="form-content">
        <form class="form-box register-form form-validator" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <h3 class="title">Sign Up <small>or <a href="#" class="switch-form sing-in">Sign In</a></small></h3>
            <p>If you have not an account with us, please register.</p>

            <div class="form-group{{ $errors->has('name')? ' has-error ' : '' }}">
                <label for="name">Name: <span class="required">*</span></label>
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email')? ' has-error ' : '' }}">
                <label for="email">E-Mail Address: <span class="required">*</span></label>
                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">

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

            <div class="form-group">
                <label for="password_confirmation" class="control-label">Confirm password: <span class="required">*</span></label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="buttons-box clearfix">
                <button class="btn btn-default create">Create my account</button>
                <button class="btn btn-border btn-inverse switch-form sing-in"><i class="fa fa-long-arrow-left"></i> Back to Login</button>
                <span class="required"><b>*</b> Required Field</span>
            </div>
        </form><!-- .form-box -->
    </div>
</div><!-- .back-end -->


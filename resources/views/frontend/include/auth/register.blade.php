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

            <div class="form-group{{ $errors->has('reg_email')? ' has-error ' : '' }}">
                <label for="reg_email">E-Mail Address: <span class="required">*</span></label>
                <input class="form-control" type="email" id="reg_email" name="reg_email" value="{{ old('reg_email') }}">

                @if ($errors->has('reg_email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('reg_email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('reg_password')? ' has-error ' : '' }}">
                <label for="reg_password">Password: <span class="required">*</span></label>
                <input class="form-control" type="password" id="reg_password" name="reg_password">

                @if ($errors->has('reg_password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('reg_password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="reg_password_confirmation" class="control-label">Confirm password: <span class="required">*</span></label>
                <input class="form-control" type="password" id="reg_password_confirmation" name="reg_password_confirmation">
            </div>

            <div class="buttons-box clearfix">
                <button class="btn btn-default create">Create my account</button>
                <button class="btn btn-border btn-inverse switch-form sing-in"><i class="fa fa-long-arrow-left"></i> Back to Login</button>
                <span class="required"><b>*</b> Required Field</span>
            </div>
        </form><!-- .form-box -->
    </div>
</div><!-- .back-end -->


<div class="front-end">
    <div class="form-content">
        <form class="form-box login-form form-validator" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h3 class="title">Sign In
                <small>or <a href="#" class="switch-form sing-up">Sign Up</a></small>
            </h3>
            <p>If you have an account with us, please log in.</p>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email Address <span class="required">*</span></label>
                <input class="form-control" type="email" id="email" name="email">

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

            <div class="buttons-box clearfix">
                <button class="btn btn-default" type="submit">Login</button>
                <a href="#" class="switch-form forgot">Forgot Your Password?</a>
                <span class="required"><b>*</b> Required Field</span>
            </div>
        </form><!-- .form-box -->
    </div>
</div><!-- .front-end -->
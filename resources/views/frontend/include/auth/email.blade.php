<div class="back-end">
    <div class="form-content">
        <form class="form-box forgot-form form-validator" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}

            <h3 class="title">Retrieve your password here</h3>
            <p>Please enter your email address below. You will receive a link to reset your password.</p>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email Address <span class="required">*</span></label>
                <input class="form-control" type="email" id="email" name="email">

                @if ($errors->has('email'))
                    <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="buttons-box clearfix">
                <button class="btn btn-default reset">Submit</button>
                <button class="btn btn-border btn-inverse switch-form sing-in"><i class="fa fa-long-arrow-left"></i> Back to Login</button>
                <span class="required"><b>*</b> Required Field</span>
            </div>
        </form><!-- .form-box -->
    </div>
</div><!-- .back-end -->


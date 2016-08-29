@if(!Auth::user())
<section id="main" class="page-login-promo">
    <div class="container login-register">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div data-appear-animation="bounceInDown">
                    <div class="rotation" >

                        @include('frontend.include.auth.login')

                        @include('frontend.include.auth.register')

                        @include('frontend.include.auth.email')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
Hello
@endif
@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @include('frontend.auth.login')
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">

{{-- Section of head tag --}}
@include('backend.include.head')

<body>

<section>

    {{--Header section --}}
    @include('backend.include.header')

    {{-- Main content section --}}
    <div class="container" id="main">
        <div class="row">

            <article class="content pull-right col-sm-12 col-md-9">
                @yield('content')
            </article>
            <div id="sidebar" class="sidebar span3">
                @include('backend.include.sidebar')
            </div>
        </div>
    </div>

</section>

{{-- Javascript include section --}}
@include('backend.include.javascripts')
</body>
</html>











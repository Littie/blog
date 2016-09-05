<!DOCTYPE html>
<html lang="en">

{{-- Section of head tag --}}
@include('partials.app.head')

<body>

    {{-- Header section --}}
    @include('frontend.include.header')

    {{-- Main content section --}}
    @yield('content')

    {{-- Javascript include section --}}
    @include('frontend.include.javascripts')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

{{-- Section of head tag --}}
@include('partials.app._head')

<body>

    {{-- Header section --}}
    @include('partials.app._header')

    {{-- Main content section --}}
    @yield('content')

    {{-- Javascript include section --}}
    @include('partials.app._javascripts')

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.css')
</head>

<body>
    <a class="whistleblower" href="#" >WHISTLEBLOWER</a>
    @include('layouts.frontend.header')
    <section>
        @include('layouts.frontend.slider')
        @include('layouts.frontend.contact')
        @yield('content')
    </section>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')
    @yield('script')
</body>

</html>
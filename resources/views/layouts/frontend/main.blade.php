<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.css')
</head>

<body>
    @include('layouts.frontend.header')
    <section>
        @include('layouts.frontend.slider')
        @include('layouts.frontend.contact')
        @yield('content')
    </section>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')
</body>

</html>
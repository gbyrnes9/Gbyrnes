<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    @include('/layout/link-head')
</head>

<body>

    @include('/layout/head-bar')
    @include('flash::message')
    @yield('content')
    @include('/layout/footer-link')
    @yield('footer-link')

</body>


</html>
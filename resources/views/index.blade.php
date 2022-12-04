<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body>
@include('nav')

<div id="app">
    @yield('content')
</div>


<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

@include('footer')
</body>


</html>

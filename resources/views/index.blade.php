<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('header')

<body>
<div id="app">
    <router-view></router-view>
</div>

@include('footer')

<script src="./js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>


</html>

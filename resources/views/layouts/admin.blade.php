<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="stylesheet" href="{{asset('admin-assets/css/bootstrap.css')}}">
</head>
<body>
@include('layouts.admin-templates.header')

<main class="pu-5">
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="{{asset('admin-assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('admin-assets/js/jquery-3.7.1.js')}}"></script>
@yield('scripts')
</body>
</html>

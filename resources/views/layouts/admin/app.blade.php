<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-Food') }}</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <header class="row">
        @include('includes.header')
    </header>
        @include('includes.Sidebar')

    <main class="py-4">
        @yield('content')
    </main>
    
    <!-- <footer class="row">
        @include('includes.footer')
    </footer> -->

</div>
</body>
</html>



</html>

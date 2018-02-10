<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Silat Virginia provides Pencak Silat Indonesian martial arts instruction for children and adults in a fun and safe environment. Learn more and schedule a free class.">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/favicon.ico">

        <title>Silat Virginia | @yield('page-title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}?q=1" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('assets/css/modern-business.css') }}?q=1" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>

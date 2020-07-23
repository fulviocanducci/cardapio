<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrativo</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/layout.css" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/ico/favicon-16x16.png">
    <link rel="manifest" href="/images/ico/site.webmanifest">
</head>
<body>
    <div class="container-fluid">
        @include('layout.content')
    </div>
    <script src="/js/jquery-3.5.1.min.js"></script>
    {{-- <script src="/js/popper.js"></script> --}}
    <script src="/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>

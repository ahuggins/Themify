<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body @yield('body_class')>
    
    @include('partials.header.firstHeader')

    <div class="main">
        <div class="container">
            Main
        </div>
    </div>


    @include('partials.footer.firstFooter')
    <script src="https://code.jquery.com/jquery-1.11.3.min.js\"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>

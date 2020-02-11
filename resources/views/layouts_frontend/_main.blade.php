<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silah Lombok Travel & Tours</title>
    @include('layouts_frontend._css')
    @yield('extra_style')
</head>
<body>
    @include('layouts_frontend._nav')
    @yield('content')
    @include('layouts_frontend._footer')
    @include('layouts_frontend._script')
    @include('layouts_frontend._loader')
    @yield('extra_script')
</body>
</html>
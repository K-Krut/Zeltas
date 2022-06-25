<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title-block')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
    @include('includes.style-product')
</head>
<body>

@include('includes.navigation')

<div class="body-class">

    @yield('content')

    @include('includes.scripts')
    @include('includes.scripts-item')
    @include('includes.product-slider')

</div>

@include('includes.footer')
</body>
</html>

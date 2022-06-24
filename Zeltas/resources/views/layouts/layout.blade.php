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
</head>
<body style='background-image: url("images/patterns/background_main_2.png");'>

@include('includes.navigation')


@yield('content')


@include('includes.footer')
@include('includes.scripts')
</body>
</html>

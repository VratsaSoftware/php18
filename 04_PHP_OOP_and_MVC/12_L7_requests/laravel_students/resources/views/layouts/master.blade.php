<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="">
</head>
<body>       
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo route('home') ?>">Home</a>
            </li>
            <li>
                <a href="{{ route('courses.index') }}">Courses page</a>
            </li>
            <li>
                <a href="{{ route('homework') }}">Homeworks</a>
            </li>
            <li>
                <a href="{{ route('profile') }}">Profile page</a>
            </li>
            <li>
                <a href="{{ route('modules.index') }}">Modules page</a>
            </li>           
            <li>
                <a href="{{ route('lecture') }}">Lectures page</a>
            </li>
        </ul>
        @yield('content')
    </div>        
    <script type="text/javascript" src=""></script>
</body>
</html>

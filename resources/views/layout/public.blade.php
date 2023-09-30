{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield("title")</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>
<body>
    

    
    @yield('homeContent')
    
    
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon">
    <title>@yield("title")</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])


</head>
<body>
    
    @include('header')

    @yield('homeContent')
    @yield('comicContent')
    @yield('charactersContent')
    @yield('moviesContent')
    @yield('tvContent')
    @yield('gamesContent')
    @yield('collectiblesContent')
    @yield('videoContent')
    @yield('fansContent')
    @yield('newsContent')
    @yield('shopContent')
    
    @include("footer")
    
    
</body>
</html>
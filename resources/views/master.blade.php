<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="{{ route('d') }}">dashboard</a> 
        <a href="{{ route('logout') }}">logout</a>
        <a href="{{ route('profile') }}">profile</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>

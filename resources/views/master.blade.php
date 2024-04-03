<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-gray-800 text-white p-4 flex flex-wrap justify-between">
        <div>
            <a href="{{ route('d') }}" class="mr-4 hover:text-gray-400">Dashboard</a> 
            <a href="{{ route('profile') }}" class="mr-4 hover:text-gray-400">Profile</a>
        </div>
        <div class="flex items-center">
            <a href="{{ route('logout') }}" class="hover:text-gray-400 ml-auto hidden sm:inline">Logout</a>
        </div>
    </nav>
    <main class="container ">
        @yield('content')
    </main>
</body>
</html>

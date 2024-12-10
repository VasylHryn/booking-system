<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bookings')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
<header class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('bookings.index') }}" class="text-xl font-bold">Booking System</a>
        <nav>
            <a href="{{ route('bookings.index') }}" class="px-4">Home</a>
            <a href="{{ route('bookings.create') }}" class="px-4">Create Booking</a>
        </nav>
    </div>
</header>
<main class="container mx-auto p-4">
    @yield('content')
</main>

@yield('footer')
</body>
</html>

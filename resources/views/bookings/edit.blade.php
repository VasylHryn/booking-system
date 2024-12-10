<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Booking</h1>
    <form action="{{ route('bookings.update', $booking->id) }}" method="POST" class="bg-white p-4 rounded shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" value="{{ $booking->name }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" value="{{ $booking->email }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="booking_date" class="block text-sm font-bold mb-2">Booking Date:</label>
            <input type="date" name="booking_date" id="booking_date" value="{{ $booking->booking_date }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
</body>
</html>

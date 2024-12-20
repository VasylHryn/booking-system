<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
<div class="container mx-auto p-4 ">
    @if (session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <h1 class="text-2xl font-bold mb-4">Bookings List</h1>
    <table class="table-auto w-full bg-white rounded shadow">
        <<thead>
        <tr>
            <th class="px-4 py-2 border">ID</th>
            <th class="px-4 py-2 border">Name</th>
            <th class="px-4 py-2 border">Email</th>
            <th class="px-4 py-2 border">Booking Date</th>
            <th class="px-4 py-2 border">Actions</th> <!-- Новая колонка -->
        </tr>
        </thead>
        <tbody>
        @forelse ($bookings as $booking)
            <tr>
                <td class="px-4 py-2 border">{{ $booking->id }}</td>
                <td class="px-4 py-2 border">{{ $booking->name }}</td>
                <td class="px-4 py-2 border">{{ $booking->email }}</td>
                <td class="px-4 py-2 border">{{ $booking->booking_date }}</td>
                <td class="px-4 py-2 border text-center">
                    <!-- Кнопка редактирования -->
                    <a href="{{ route('bookings.edit', $booking->id) }}"
                       class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700">
                        Edit
                    </a>
                    <!-- Кнопка удаления -->
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Are you sure?')"
                                class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-700">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center px-4 py-2 border">No bookings available</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>

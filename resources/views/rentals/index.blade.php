<h1>List of Rentals</h1>
<a href="{{ route('rentals.create') }}">Add New Rental</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Car</th>
            <th>Customer</th>
            <th>Rental Date</th>
            <th>Return Date</th>
            <th>Total Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->car->name }}</td>
                <td>{{ $rental->customer->name }}</td>
                <td>{{ $rental->rental_date }}</td>
                <td>{{ $rental->return_date }}</td>
                <td>{{ $rental->total_price }}</td>
                <td>
                    <a href="{{ route('rentals.edit', $rental->id) }}">Edit</a>
                    <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<h1>List of Cars</h1>
<a href="{{ route('cars.create') }}">Add New Car</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Brand</th>
            <th>License Plate</th>
            <th>Price per Day</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->name }}</td>
                <td>{{ $car->brand }}</td>
                <td>{{ $car->license_plate }}</td>
                <td>{{ $car->price_per_day }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

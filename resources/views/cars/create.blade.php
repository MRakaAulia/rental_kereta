<h1>Add New Car</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    <br>

    <label for="brand">Brand:</label>
    <input type="text" id="brand" name="brand" value="{{ old('brand') }}">
    <br>

    <label for="license_plate">License Plate:</label>
    <input type="text" id="license_plate" name="license_plate" value="{{ old('license_plate') }}">
    <br>

    <label for="price_per_day">Price per Day:</label>
    <input type="text" id="price_per_day" name="price_per_day" value="{{ old('price_per_day') }}">
    <br>

    <button type="submit">Add Car</button>
</form>

<h1>Add New Rental</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('rentals.store') }}" method="POST">
    @csrf
    <label for="car_id">Car:</label>
    <select id="car_id" name="car_id">
        @foreach ($cars as $car)
            <option value="{{ $car->id }}">{{ $car->name }}</option>
        @endforeach
    </select>
    <br>

    <label for="customer_id">Customer:</label>
    <select id="customer_id" name="customer_id">
        @foreach ($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
    </select>
    <br>

    <label for="rental_date">Rental Date:</label>
    <input type="date" id="rental_date" name="rental_date" value="{{ old('rental_date') }}">
    <br>

    <label for="return_date">Return Date:</label>
    <input type="date" id="return_date" name="return_date" value="{{ old('return_date') }}">
    <br>

    <label for="total_price">Total Price:</label>
    <input type="text" id="total_price" name="total_price" value="{{ old('total_price') }}">
    <br>

    <button type="submit">Add Rental</button>
</form>

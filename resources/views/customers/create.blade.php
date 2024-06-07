<h1>Add New Customer</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}">
    <br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
    <br>

    <button type="submit">Add Customer</button>
</form>

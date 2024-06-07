<h1>Edit Customer</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}">
    <br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}">
    <br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}">
    <br>

    <button type="submit">Update Customer</button>
</form>

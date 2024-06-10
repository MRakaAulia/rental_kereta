@extends('layouts.app')

@section('title', 'Edit Rental')

@section('header', 'Edit Rental')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Rental</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="car_id">Motorcycle</label>
                <select id="car_id" name="car_id" class="form-control">
                    @foreach ($cars as $car)
                        <option value="{{ $car->id }}" {{ $car->id == $rental->car_id ? 'selected' : '' }}>{{ $car->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="customer_id">Customer</label>
                <select id="customer_id" name="customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" {{ $customer->id == $rental->customer_id ? 'selected' : '' }}>{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="rental_date">Start Date</label>
                <input type="date" id="rental_date" name="rental_date" class="form-control" value="{{ old('rental_date', $rental->rental_date) }}">
            </div>

            <div class="form-group">
                <label for="return_date">End Date</label>
                <input type="date" id="return_date" name="return_date" class="form-control" value="{{ old('return_date', $rental->return_date) }}">
            </div>

            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" id="total_price" name="total_price" class="form-control" value="{{ old('total_price', $rental->total_price) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Rental</button>
        </form>
    </div>
</div>
@endsection

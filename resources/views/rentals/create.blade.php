@extends('layouts.app')

@section('title', 'Add Rental')

@section('header', 'Add Rental')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Rental</h3>
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

        <form action="{{ route('rentals.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="car_id">Car</label>
                <select id="car_id" name="car_id" class="form-control">
                    @foreach ($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="customer_id">Customer</label>
                <select id="customer_id" name="customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ old('start_date') }}">
            </div>

            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ old('end_date') }}">
            </div>

            <div class="form-group">
                <label for="total_price">Total Price</label>
                <input type="text" id="total_price" name="total_price" class="form-control" value="{{ old('total_price') }}">
            </div>

            <button type="submit" class="btn btn-primary">Add Rental</button>
        </form>
    </div>
</div>
@endsection

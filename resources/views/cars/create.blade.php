@extends('layouts.app')

@section('title', 'Add Car')

@section('header', 'Add Car')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add New Car</h3>
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

        <form action="{{ route('cars.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" class="form-control" value="{{ old('brand') }}">
            </div>

            <div class="form-group">
                <label for="license_plate">License Plate</label>
                <input type="text" id="license_plate" name="license_plate" class="form-control" value="{{ old('license_plate') }}">
            </div>

            <div class="form-group">
                <label for="price_per_day">Price per Day</label>
                <input type="text" id="price_per_day" name="price_per_day" class="form-control" value="{{ old('price_per_day') }}">
            </div>

            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>
</div>
@endsection

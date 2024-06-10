@extends('layouts.app')

@section('title', 'Edit Motorcycle')

@section('header', 'Edit Motorcycle')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Motorcycle</h3>
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

        <form action="{{ route('cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $car->name) }}">
            </div>

            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" class="form-control" value="{{ old('brand', $car->brand) }}">
            </div>

            <div class="form-group">
                <label for="license_plate">License Plate</label>
                <input type="text" id="license_plate" name="license_plate" class="form-control" value="{{ old('license_plate', $car->license_plate) }}">
            </div>

            <div class="form-group">
                <label for="price_per_day">Price per Day</label>
                <input type="text" id="price_per_day" name="price_per_day" class="form-control" value="{{ old('price_per_day', $car->price_per_day) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Motorcycle</button>
        </form>
    </div>
</div>
@endsection

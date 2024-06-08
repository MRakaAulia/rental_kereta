@extends('layouts.app')

@section('title', 'Cars')

@section('header', 'Cars')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of Cars</h3>
        <div class="card-tools">
            <a href="{{ route('cars.create') }}" class="btn btn-primary">Add New Car</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
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
                            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

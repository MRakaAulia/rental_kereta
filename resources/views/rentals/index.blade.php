@extends('layouts.app')

@section('title', 'Rentals')

@section('header', 'Rentals')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of Rentals</h3>
        <div class="card-tools">
            <a href="{{ route('rentals.create') }}" class="btn btn-primary">Add New Rental</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Car</th>
                    <th>Customer</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rentals as $rental)
                    <tr>
                        <td>{{ $rental->car->name }}</td>
                        <td>{{ $rental->customer->name }}</td>
                        <td>{{ $rental->start_date }}</td>
                        <td>{{ $rental->end_date }}</td>
                        <td>{{ $rental->total_price }}</td>
                        <td>
                            <a href="{{ route('rentals.edit', $rental->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display:inline;">
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

@extends('layouts.app')

@section('header-title', 'Car Details')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $car->name }}</h5>
                <p class="card-text">Brand: {{ $car->brand }}</p>
                <p class="card-text">Year: {{ $car->year }}</p>
                <p class="card-text">Price per Day: {{ $car->price_per_day }}</p>
                <p class="card-text">Description: {{ $car->description }}</p>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Edit Customer')

@section('header', 'Edit Customer')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Customer</h3>
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

        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $customer->name) }}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $customer->email) }}">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone', $customer->phone) }}">
            </div>


            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
</div>
@endsection

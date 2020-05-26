@extends('layouts.master')

@section('content')
<h1>Create a product</h1>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-row">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="10" value="{{ old('description') }}"></textarea>
    </div>
    <div class="form-row">
        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" min="1.00" step="0.01" value="{{ old('price') }}">
    </div>
    <div class="form-row">
        <label for="stock">Stock</label>
        <input class="form-control" type="number" name="stock" min="0" value="{{ old('stock') }}">
    </div>
    <div class="form-row">
        <label for="status">Status</label>
        <select class="custom-select" name="status">
            <option {{ old('status') == 'unavailable' ? 'selected' : '' }} value="unavailable" selected>Unavailable
            </option>
            <option {{ old('status') == 'available' ? 'selected' : '' }} value="available">Available</option>
        </select>
    </div>
    <div class="form-row">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection

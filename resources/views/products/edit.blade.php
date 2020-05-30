@extends('layouts.app')

@section('content')
<h1>Edit a product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="form-row">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title', $product->title) }}" required>
    </div>
    <div class="form-row">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="10" required>
            {{ old('title', $product->description) }}
        </textarea>
    </div>
    <div class="form-row">
        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" min="1.00" step="0.01"
            value="{{ old('title', $product->price) }}"" required>
    </div>
    <div class=" form-row">
        <label for="stock">Stock</label>
        <input class="form-control" type="number" name="stock" min="0" value="{{ old('title', $product->stock) }}"
            required>
    </div>
    <div class=" form-row">
        <label for="status">Status</label>
        <select class="custom-select" name="status">
            <option {{ old('title', $product->status) === 'unavailable' ? 'selected' : ''}} value="unavailable"
                selected>Unavailable
            </option>
            <option {{ old('title', $product->status) === 'available' ? 'selected' : ''}} value="available">Available
            </option>
        </select>
    </div>
    <div class="form-row mt-3">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection

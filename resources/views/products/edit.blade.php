@extends('layouts.app')

@section('content')
<h1>Edit a product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="form-row mb-3">
        <label for="title">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
            value="{{ old('title', $product->title) }}" required>
        @error('title')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-row mb-3">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="10" required>
            {{ old('description', $product->description) }}
        </textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-row mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" min="1.00"
            step="0.01" value="{{ old('price', $product->price) }}" required>
        @error('price')
        <div class=" invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-row mb-3">
        <label for="stock">Stock</label>
        <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" min="0"
            value="{{ old('stock', $product->stock) }}" required>
        @error('stock')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-row mb-3">
        <label for="status">Status</label>
        <select class="custom-select @error('status') is-invalid @enderror" name="status">
            <option {{ old('status', $product->status) === 'unavailable' ? 'selected' : ''}} value="unavailable"
                selected>Unavailable
            </option>
            <option {{ old('status', $product->status) === 'available' ? 'selected' : ''}} value="available">Available
            </option>
        </select>
        @error('status')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-row">
        <button class="btn btn-primary">Save</button>
    </div>
</form>
@endsection

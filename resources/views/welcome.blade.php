@extends('layouts.app')

@section('content')
<h1>Welcome page</h1>

@empty($products)
No products.
@else
<div class="row">
    @foreach ($products as $product)
    <div class="col-3">
        @include('components.product-card')
    </div>
    @endforeach
</div>
@endempty
@endsection

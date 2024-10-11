@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="well">
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Pastikan ini ada untuk memberi tahu Laravel bahwa ini adalah permintaan PUT -->

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        <img src="{{ asset('storage/' . $product->image) }}" class='img-thumbnail' width="100">
    </div>
    <div class="form-group">
        <label for="deskripsi">Description</label>
        <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $product->deskripsi) }}" required>
    </div>
    <div class="form-group">
        <label for="icon">Icon</label>
        <input type="file" name="icon" class="form-control">
        <img src="{{ asset('storage/' . $product->icon) }}" class='img-thumbnail' width="100">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</div>
@endsection

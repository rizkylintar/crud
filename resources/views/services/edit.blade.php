@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Service</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="well">
        <form action="{{ route('services.update', $service->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <table class="table table-bordered">
                <tr>
                    <td width="130">Name</td>
                    <td><input type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}" required></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" class="form-control"></td>
                    <td><img src="{{ asset('storage/' . $service->image) }}" class='img-thumbnail' width="100"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $service->deskripsi) }}" required></td>
                </tr>
                <tr>
                    <td>Icon</td>
                    <td><input type="file" name="icon" class="form-control"></td>
                    <td><img src="{{ asset('storage/' . $service->icon) }}" class='img-thumbnail' width="100"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection

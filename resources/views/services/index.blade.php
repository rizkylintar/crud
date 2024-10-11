

<!DOCTYPE html>
<html lang="en">
<head>
@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .well {
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
    }
    .table {
      margin-top: 20px;
    }
    .table th, .table td {
      text-align: center;
    }
    .delete-button {
      background-color: #d9534f;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    .delete-button:hover {
      background-color: #c9302c;
    }
    .edit-button {
      background-color: #f0ad4e;
      color: white;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 4px;
    }
    .edit-button:hover {
      background-color: #ec971f;
    }
    .img-thumbnail {
      width: 100px; /* Membatasi ukuran gambar */
      height: auto;
    }
    .container-fluid {
      padding: 20px;
    }
    .centered {
      text-align: center;
    }
    .form-control-file {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
    
    <div class="container">
        <h1>Services</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Description:</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="icon">Icon:</label>
                <input type="file" name="icon" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h2>List of Services</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Actions</th> <!-- New Actions column -->
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td><img src="{{ asset('storage/' . $service->image) }}" alt="Image" width="100"></td>
                    <td>{{ $service->deskripsi }}</td>
                    <td><img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="100"></td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
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
</body>
</html>

@extends('layouts.app')

@section('content')

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
<div class="container">
    <h2 class="text-center">Daftar User</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Avatar</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td><img src="{{ asset('storage/' . $user->avatar) }}" class="img-thumbnail" alt="Image" style="height: 100px;" ></td>
                    <td>{{ $user->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah</a>
</div>
@endsection

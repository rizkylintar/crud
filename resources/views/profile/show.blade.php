@extends('layouts.app')

@section('content')    <style>

.container-1 {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.profile-header {
    text-align: center;
    margin-bottom: 20px;
}
.profile-header img {
    width: 80px; /* Adjusted width */
    height: 80px; /* Adjusted height */
    border-radius: 50%;

    object-fit: cover;
    transition: transform 0.3s, box-shadow 0.3s;
}
.profile-header img:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}
.profile-header h2 {
    margin: 10px 0;
    font-size: 1.5em; /* Adjusted font size */
    color: #333;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}
th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
th {
    background-color: #f4f4f4;
    color: black;
    font-weight: bold;
}
td {
    background-color: #ffffff; /* Ensure cells have no background color */
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
tr:hover {
    background-color: #f1f1f1;
}
</style>
<div class="container">
    <div class="profile-header text-center mb-4">
        @if($user->avatar)
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="rounded-circle" style="width: 80px; height: 80px;">
        @else
            <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar" class="rounded-circle" style="width: 80px; height: 80px;">
        @endif
        <h2>{{ $user->name }}</h2>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $user->phone }}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>{{ $user->role }}</td>
        </tr>
    </table>
</div>
@endsection

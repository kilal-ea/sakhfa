@extends('master')

@section('content')
    <div style='display: flex'>
        <div>
            <a href="{{ route('deleteuser') }}">Delete User</a><br>
            <a href="{{ route('add') }}">Add User</a><br>
            <a href="#">Accept Client</a><br>
            <a href="#">Show Client</a><br>
            <a href="#">Show Product</a><br>
            <div>
                <a href="#">Show Users</a><br>
                <a href="#">Show Stock</a><br>
            </div>
            <a href="#">Add Product</a><br>
            <a href="#">Show Users</a><br>
            <a href="#">Show Bonv</a><br>
            <a href="#">Show Sbontra</a><br>
        </div>
        <div>
            @yield('admin')
        </div>
    </div>
@endsection

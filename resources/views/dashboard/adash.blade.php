@extends('master')

@section('content')
    <div>
        <div class="bg-gray-600 border-b-2 border-white text-white flex justify-center">
            <p class="font-bold mb-1">{{ $user->name }}</p>
        </div>

        <div class="flex">
            <div class="mr-8 bg-gray-600 w-1/5">
                <a href="{{ route('deleteuser') }}" class="block p-4 border-b-2 text-center text-white border-white">Delete User</a>
                <a href="{{ route('add') }}" class="block p-4 border-b-2 text-center text-white border-white">Add User</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Accept Client</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Client</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Product</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Users</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Stock</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Add Product</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Users</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Bonv</a>
                <a href="#" class="block p-4 border-b-2 text-center text-white border-white">Show Sbontra</a>
            </div>
            <div class='w-4/5'>
                @yield('admin')
            </div>
        </div>
    </div>
@endsection

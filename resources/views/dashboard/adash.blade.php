@extends('master')

@section('content')
    <div class="">
    <a  href="{{ route('deleteuser') }}">deleteUser</a>
    <a  href="{{ route('add') }}">addUser</a>
        <a>acceptClient</a>
        <a>showclint</a>
        <a>showproduct</a>
        <div>
            <a>showusers</a>
                <a>showstock</a>
        </div>
        <a>addproduct</a>
        <a>showusers</a>
        <a>showbonv</a>
        <a>showsbontra</a>
    </div>
    <div>
        @yield('admin')
    </div>
@endsection

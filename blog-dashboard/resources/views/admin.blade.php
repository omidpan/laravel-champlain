@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }} (Role: {{ auth()->user()->role }})</p>
</div>
@endsection

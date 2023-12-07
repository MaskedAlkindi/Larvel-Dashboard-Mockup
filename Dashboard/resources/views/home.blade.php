@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Dashboard</h1>
    <div class="card">
        <div class="card-header">Users</div>
        <div class="card-body">
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user->name }} - {{ $user->email }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Add more sections for other data -->
</div>
@endsection

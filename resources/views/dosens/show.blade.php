@extends('bar')

@section('main')
<div class="container">
    <h1>User Details</h1>
    
    <table class="table">
        <tr>
            <th>NID</th>
            <td>{{ $user->NID }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
    </table>
    <a href="{{ route('users.edit', $user) }}" class="btn btn-secondary">Edit</a>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection

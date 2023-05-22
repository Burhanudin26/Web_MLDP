@extends('bar')

@section('main')
<div class="container">
    <h1>Admins Details</h1>
    
    <table class="table">
        <tr>
            <th>NIA</th>
            <td>{{ $admin->NIA }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $admin->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $admin->email }}</td>
        </tr>
    </table>
    <a href="{{ route('admins.edit', $admin) }}" class="btn btn-secondary">Edit</a>
    <a href="{{ route('admins.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection

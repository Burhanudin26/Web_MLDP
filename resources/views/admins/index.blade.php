@extends('bar')

@section('main')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('admins.create') }}" class="btn btn-success">Add User</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>NIA</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($admins as $admin)
                <tr>
                    <td>{{ $admin->NIA }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>
                        <a href="{{ route('admins.show', $admin) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('admins.edit', $admin) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('admins.destroy', $admin) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No admins found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
</div>
@endsection

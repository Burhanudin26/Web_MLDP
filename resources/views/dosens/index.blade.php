@extends('bar')

@section('main')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('dosens.create') }}" class="btn btn-success">Add Dosen</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>NID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->NID }}</td>
                    <td>{{ $dosen->name }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>
                        <a href="{{ route('dosens.show', $dosen) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('dosens.edit', $dosen) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('dosens.destroy', $dosen) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
</div>
@endsection

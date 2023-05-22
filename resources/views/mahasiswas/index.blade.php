@extends('bar')

@section('main')
<div class="container">
    <h1>Mahasiswa</h1>
    <a href="{{ route('mahasiswas.create') }}" class="btn btn-success">Add User</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->NIM }}</td>
                    <td>{{ $mahasiswa->name }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>
                        <a href="{{ route('mahasiswas.show', $mahasiswa) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('mahasiswas.edit', $mahasiswa) }}" class="btn btn-secondary btn-sm">Edit</a>
                        <form action="{{ route('mahasiswas.destroy', $mahasiswa) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No mahasiswas found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
</div>
@endsection

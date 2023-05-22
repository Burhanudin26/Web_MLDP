@extends('bar')

@section('main')
<div class="container">
    <h1>Mahasiswa Details</h1>
    
    <table class="table">
        <tr>
            <th>NIM</th>
            <td>{{ $mahasiswa->NIM }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $mahasiswa->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $mahasiswa->email }}</td>
        </tr>
        <tr>
    </table>
    <a href="{{ route('mahasiswas.edit', $mahasiswa) }}" class="btn btn-secondary">Edit</a>
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection

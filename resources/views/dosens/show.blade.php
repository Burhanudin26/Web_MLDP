@extends('bar')

@section('main')
<div class="container">
    <h1>User Details</h1>
    
    <table class="table">
        <tr>
            <th>NID</th>
            <td>{{ $dosen->NID }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $dosen->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $dosen->email }}</td>
        </tr>
        <tr>
    </table>
    <a href="{{ route('dosens.edit', $dosen) }}" class="btn btn-secondary">Edit</a>
    <a href="{{ route('dosens.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection

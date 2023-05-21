@extends('bar')

@section('main')
<div class="container">
    <h1>Create User</h1>
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="NID">NID</label>
            <input type="number" name="NID" id="NID" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <div>
                <input type="radio" name="role" id="role-student" value="student" required>
                <label for="role-student">Student</label>
            </div>
            <div>
                <input type="radio" name="role" id="role-lecture" value="lecture" required>
                <label for="role-lecture">Lecture</label>
            </div>
            <div>
                <input type="radio" name="role" id="role-admin" value="admin" required>
                <label for="role-admin">Admin</label>
            </div>
        </div>
                <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
</div>
@endsection

<!-- resources/views/attendance/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Add Attendance</h2>
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

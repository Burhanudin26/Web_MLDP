<!-- resources/views/attendance/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Attendance</h2>
        <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $attendance->name }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $attendance->status }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

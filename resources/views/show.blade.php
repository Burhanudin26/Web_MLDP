{{-- <!-- resources/views/attendance/show.blade.php -->
@extends('bar')

@section('main')    <div class="container">
        <h2>Attendance Details</h2>
        <table class="table">
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td>{{ $attendance->name }}</td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{ $attendance->status }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection --}}
<!-- resources/views/attendance/show.blade.php -->
@extends('bar')

@section('main')
    <div class="container">
        <h2>Attendance Details</h2>
        <div>
            <label for="name">Name:</label>
            <span>John Doe</span>
        </div>
        <div>
            <label for="status">Status:</label>
            <span>Present</span>
        </div>
        <a href="#" class="btn btn-primary">Edit</a>
        <button class="btn btn-danger">Delete</button>
    </div>
@endsection

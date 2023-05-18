{{-- <!-- resources/views/attendance/index.blade.php -->
@extends('bar')

@section('main')
    <div class="container">
        <h2>Attendance Records</h2>
        <a href="{{ route('attendance.create') }}" class="btn btn-primary">Add Attendance</a>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->status }}</td>
                    <td>
                        <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}

<!-- resources/views/attendance/index.blade.php -->
@extends('bar')

@section('main')
    <div class="container">
        <h2>Attendance List</h2>
        <a href="#" class="btn btn-primary">Create Attendance</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Present</td>
                    <td>
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Absent</td>
                    <td>
                        <a href="#" class="btn btn-info">Show</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection


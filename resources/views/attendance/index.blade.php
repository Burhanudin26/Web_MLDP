<!-- resources/views/attendance/index.blade.php -->
@extends('bar')

@section('main')
    <div class="container ">
        <h2>Attendance Records</h2>
        <a href="{{ route('attendance.create') }}" class="btn btn-primary">Add Attendance</a>
        <table class="table mt-2 ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Location</th>
                    <th>Distance</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->name }}</td>
                    <td>{{ $attendance->status }}</td>
                    <td>{{ $attendance->latitude}},{{ $attendance->longitude }}</td>
                    <td>{{ $attendance->distance }}</td>
                    <td>
                        <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('attendance.show', $attendance->id) }}" class="btn btn-primary">Details</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


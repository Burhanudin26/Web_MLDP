<!-- resources/views/attendance/delete.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Delete Attendance Record</h2>
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
        <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('attendance.index') }}" class="btn btn-primary">Cancel</a>
        </form>
    </div>
@endsection

<!-- resources/views/attendance/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
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
@endsection

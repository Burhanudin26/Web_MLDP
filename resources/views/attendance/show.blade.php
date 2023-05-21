<!-- resources/views/attendance/show.blade.php -->
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
                <tr>
                    <th>Location:</th>
                    <td>{{ $attendance->latitude }}','{{ $attendance->longitude }}</td>
                </tr>
                <tr>
                    <th>Distance:</th>
                    <td>{{ $attendance->distance }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Back</a>
    </div>
@endsection


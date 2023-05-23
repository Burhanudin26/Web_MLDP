@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                        <h1>Attendance Details</h1>
                    </div>
                    <div class="card-body" style="color: #000000;">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <td>{{ $attendance->name }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $attendance->status }}</td>
                            </tr>
                            <tr>
                                <th>Latitude</th>
                                <td>{{ $attendance->latitude }}</td>
                            </tr>
                            <tr>
                                <th>Longitude</th>
                                <td>{{ $attendance->longitude }}</td>
                            </tr>
                            <tr>
                                <th>Distance</th>
                                <td>{{ $attendance->distance }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('attendance.edit', $attendance) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

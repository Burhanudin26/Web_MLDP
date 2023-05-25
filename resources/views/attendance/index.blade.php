@extends('bar')

@section('main')

<div class="section" style="background-color: rgb(191,225,255); min-height:800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color:#0C134F; color: #ffffff">
                        <h2>Attendance</h2>
                    </div>
                    <div class="card-body rounded-2" style="height: fit-content; background-color: #ffffff">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="container">
                                <a href="{{ route('attendance.create') }}" class="btn btn-success">Add Attendance</a>
                                @if(session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                                @endif

                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Latitude</th>
                                            <th>Longtitude</th>
                                            <th>Distance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($attendances as $attendance)
                                        <tr>
                                            <td>{{ $attendance->name }}</td>
                                            <td>{{ $attendance->status }}</td>
                                            <td>{{ $attendance->latitude }}</td>
                                            <td>{{ $attendance->longitude }}</td>
                                            <td>{{ $attendance->distance }} km</td>
                                            <td>
                                                <a href="{{ route('attendance.show', $attendance) }}" class="btn btn-primary btn-sm">View</a>
                                                <a href="{{ route('attendance.edit', $attendance) }}" class="btn btn-secondary btn-sm">Edit</a>
                                                <form action="{{ route('attendance.destroy', $attendance) }}" method="POST" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">No users found.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

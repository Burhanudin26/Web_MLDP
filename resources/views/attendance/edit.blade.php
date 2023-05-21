<!-- resources/views/attendance/edit.blade.php -->
@extends('bar')

@section('main')
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
                <label>Status:</label><br>
                <label for="present">
                    <input type="radio" id="present" name="status" value="Present" {{ $attendance->status === 'Present' ? 'checked' : '' }} required> Present
                </label><br>
                <label for="excuse">
                    <input type="radio" id="excuse" name="status" value="Excuse" {{ $attendance->status === 'Excuse' ? 'checked' : '' }} required> Excuse
                </label><br>
                <label for="absent">
                    <input type="radio" id="absent" name="status" value="Absent" {{ $attendance->status === 'Absent' ? 'checked' : '' }} required> Absent
                </label><br>
                <label for="sick">
                    <input type="radio" id="sick" name="status" value="Sick" {{ $attendance->status === 'Sick' ? 'checked' : '' }} required> Sick
                </label><br>
                <label for="invalid">
                    <input type="radio" id="invalid" name="status" value="Invalid" {{ $attendance->status === 'Invalid' ? 'checked' : '' }} required> Invalid
                </label><br>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
        </form>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Attendance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this attendance record?
                </div>
                <div class="modal-footer">
                    <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- resources/views/attendance/edit.blade.php -->
{{-- @extends('bar')

@section('main')
    <div class="container">
        <h2>Edit Attendance</h2>
        <form action="#" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="John Doe" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="Present" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection --}}

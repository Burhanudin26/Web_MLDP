<!-- resources/views/attendance/edit.blade.php -->
@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff;">
                        <h1 style="color: #ffffff;">Edit Attendance</h1>
                    </div>

                    @if($errors->any())
                    <div class="alert alert-danger" style="background-color: #ffffff; color: #000000;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

        <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
            @csrf
            @method('PUT')
            <br>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $attendance->name }}" required>
            </div>
            <br>
            <div class="form-group">
                <label>Status:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="present" value="Present" required>
                    <label class="form-check-label" for="present">
                      Present
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="absent" value="Absent" required>
                    <label class="form-check-label" for="absent">
                      Absent
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="excuse" value="Excuse" required>
                    <label class="form-check-label" for="excuse">
                      Excuse
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" id="sick" value="Sick" required>
                    <label class="form-check-label" for="sick">
                      Sick
                    </label>
                  </div>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Update</button>
            <!-- <button type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#deleteModal">Delete</button> -->
        </form>
    </div>
@endsection
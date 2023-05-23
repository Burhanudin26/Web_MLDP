@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                        <h1>Dosen Details</h1>
                    </div>
                    <div class="card-body" style="color: #000000;">
                        <table class="table">
                            <tr>
                                <th>NID</th>
                                <td>{{ $dosen->NID }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $dosen->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $dosen->email }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('dosens.edit', $dosen) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('dosens.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

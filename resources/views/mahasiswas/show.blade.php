@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                        <h1>Mahasiswa Details</h1>
                    </div>
                    <div class="card-body" style="color: #000000;">
                        <table class="table">
                            <tr>
                                <th>NIM</th>
                                <td>{{ $mahasiswa->NIM }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $mahasiswa->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $mahasiswa->email }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('mahasiswas.edit', $mahasiswa) }}" class="btn btn-secondary">Edit</a>
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
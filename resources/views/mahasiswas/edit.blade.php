@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191, 225, 255); min-height: 800px;">
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm p-4">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff;">
                        <h1 style="color: #ffffff;">Edit Mahasiswa</h1>
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

                    <form action="{{ route('mahasiswas.update', $mahasiswa) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="NIM" class="mt-3" style="color: #000000;">NIM</label>
                            <input type="text" name="NIM" id="NIM" class="form-control"
                                value="{{ $mahasiswa->NIM }}" required style="background-color: #ffffff; color: #000000;">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="name" style="color: #000000;">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $mahasiswa->name }}" required style="background-color: #ffffff; color: #000000;">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email" style="color: #000000;">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $mahasiswa->email }}" required style="background-color: #ffffff; color: #000000;">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password" style="color: #000000;">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required
                              value="{{ $mahasiswa->password }}" required style="background-color: #ffffff; color: #000000;">
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: green; color: #ffffff;">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
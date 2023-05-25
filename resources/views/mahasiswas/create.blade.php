@extends('bar')

@section('main')
<div class="section" style="background-color: rgb(191,225,255); min-height:800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color:#0C134F; color: #ffffff">
                    <h1>Create Mahasiswa</h1>
                    </div>
                    <div class="card-body" style="color: #000000;">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
        
                                <form action="{{ route('mahasiswas.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="NIM">NIM</label>
                                        <input type="text" name="NIM" id="NIM" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
    </div>
</div>
</div>
</div>
    </div>
</div>
@endsection

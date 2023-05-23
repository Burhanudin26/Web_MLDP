@extends('bar')
@section('main')
<div class="section" style="background-color: rgb(191,225,255); min-height:800px;">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="card text-bg-dark mb-4 mt-2" >
                <img src="img/banner.png" class="card-img" style="max-height: 200px" alt="...">
              </div>
            <div class="col mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color:#0C134F; color: #ffffff">
                        <h2>Demo Menu</h2>
                    </div>
                    <div class="card-body rounded-2" style="height: fit-content; background-color: #ffffff">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="card-body">
                                <center>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2">
                                            <a href="/admins">
                                                <button class="btn btn-primary btn-block" style="min-width: 300px">Admin</button>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/mahasiswas">
                                                <button class="btn btn-primary btn-block" style="min-width: 300px">Mahasiswa</button>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/dosens">
                                                <button class="btn btn-primary btn-block" style="min-width: 300px">Dosen</button>
                                            </a>
                                        </li>
                                        <li class="mb-2">
                                            <a href="/attendance">
                                                <button class="btn btn-primary btn-block" style="min-width: 300px">Presensi</button>
                                            </a>
                                        </li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('bar')

@section('main')

<div class="container-fluid pt-5">
    <h1>Data Presensi</h1>

    <div class="row mt-4">
        <div class="col-sm-12 col-md-10 col-lg-8 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Status Presensi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20 Oktober 2021</td>
                                    <td>Rapat Proyek Baru</td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="hadir" name="presensi" value="Hadir">
                                            <label class="form-check-label" for="hadir">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="izin" name="presensi" value="Izin">
                                            <label class="form-check-label" for="izin">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sakit" name="presensi" value="Sakit">
                                            <label class="form-check-label" for="sakit">Sakit</label>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>25 Oktober 2021</td>
                                    <td>Presentasi Proyek</td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="hadir2" name="presensi2" value="Hadir">
                                            <label class="form-check-label" for="hadir2">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="izin2" name="presensi2" value="Izin">
                                            <label class="form-check-label" for="izin2">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sakit2" name="presensi2" value="Sakit">
                                            <label class="form-check-label" for="sakit2">Sakit</label>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>28 Oktober 2021</td>
                                    <td>Rapat Progress</td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="hadir3" name="presensi3" value="Hadir">
                                            <label class="form-check-label" for="hadir3">Hadir</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="izin3" name="presensi3" value="Izin">
                                            <label class="form-check-label" for="izin3">Izin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="sakit3" name="presensi3" value="Sakit">
                                            <label class="form-check-label" for="sakit3">Sakit</label>
                                        </div>
                                    </td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

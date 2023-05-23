{{-- 
    Admin bisa :
- Membuat, Melihat, Mengupdate, dan Menghapus Akun (self)
- Membuat, Melihat, Mengupdate, dan Menghapus Banner
- Membuat, Melihat, Mengupdate, dan Menghapus Promotional
- Membuat, Melihat, Mengupdate, dan Menghapus About
- Membuat, Melihat, Mengupdate, dan Menghapus Matkul Mahasiswa dan Dosen
- Membuat, Melihat, Mengupdate, dan Menghapus Presensi
- Membuat, Melihat, Mengupdate, dan Menghapus Tanggal
- Membuat, Melihat, Mengupdate, dan Menghapus Panduan
- Membuat, Melihat, Mengupdate, dan Menghapus Akun Mahasiswa dan Akun Dosen
    --}}
    @extends('bar')

    @section('main')
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Mahasiswa</h5>
                        <a href="/mahasiswas/" class="btn btn-primary">Go to Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dosen</h5>
                        <a href="/dosens/" class="btn btn-primary">Go to Dosen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin</h5>
                        <a href="/admins/" class="btn btn-primary">Go to Admin</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Attendance</h5>
                        <a href="/attendance/" class="btn btn-primary">Go to Attendance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
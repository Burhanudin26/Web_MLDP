    @extends('bar')

    @section('main')
    <div class="section" style="background-color: rgb(191, 225, 255)">
        <div class="container-fluid" style="min-height: 800px">
        <div class="row">
            <center>
                <div class="col-4">
                    <div class="card border-0 shadow-sm mt-4">
                      <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                        <h2>Mahasiswa</h2>
                      </div>
                      <div class="card-body text-center rounded-bottom" style=" background-color:#ffffff;">
                        <div id="page" class="container-fluid">
                            <a href="/mahasiswas/" class="btn btn-primary" style="min-width: 300px">Go to Mahasiswa</a>
                        </div>
                    </div>
                    </div>
                  </div>
                <div class="col-4">
                  <div class="card border-0 shadow-sm mt-4 ">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                      <h2>Dosen</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style=" background-color:#ffffff;">
                      <div id="page" class="container-fluid">
                          <a href="/dosens/" class="btn btn-primary" style="min-width: 300px">Go to Dosen</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-4">
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                      <h2>Admin</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style=" background-color:#ffffff;">
                      <div id="page" class="container-fluid">
                          <a href="/admins/" class="btn btn-primary" style="min-width: 300px">Go to Admin</a>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="col-4">
                <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                      <h2>Attendance</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style=" background-color:#ffffff;">
                      <div id="page" class="container-fluid">
                          <a href="/attendance/" class="btn btn-primary" style="min-width: 300px">Go to Attendance</a>
                      </div>
                  </div>
                  </div>
                </div>
            </center>
            
        </div>
    </div>
    </div>
    @endsection
    
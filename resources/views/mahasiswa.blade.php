@extends('bar')
@section('main')


    <div class="section" style="background-color: rgb(191, 225, 255)">
        <div class="container-fluid p-3">
          <div class="row">
            <div class="card text-bg-dark mb-4 mt-2" >
              <img src="img/banner.png" class="card-img" style="max-height: 200px" alt="...">
            </div>
            <div class="col-lg-9 mb-4">
              <div class="card border-0 shadow-sm">
                <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                  <h2>About</h2>
                </div>
                <div class="card-body text-center rounded-bottom" style="height:400px; background-color:#ffffff;">
                  <div id="page" class="container-fluid">
                  </div>
              </div>

              </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center" style="background-color:  #0C134F; color:#ffffff">
                        <h2>Mata Kuliah</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                      <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="/attendance/create">
                                <button class="btn btn-primary btn-block" style="min-width:400px">Matetika Komputer</button>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/attendance/create">
                                <button class="btn btn-primary btn-block" style="min-width:400px">Pemrograman Web</button>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/attendance/create">
                                <button class="btn btn-primary btn-block" style="min-width:400px">Pemrograman Berorientasi Objek</button>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="/attendance/create">
                                <button class="btn btn-primary btn-block" style="min-width:400px">Probabilitas dan Statistika</button>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mt-4">
                  <div class="card-header text-center" style="background-color:  #0C134F; color:#ffffff">
                      <h2>Helpdesk</h2>
                  </div>
                  <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                              <button class="btn btn-block btn-outline-secondary mb-2">Helpdesk FIP</button>                   
                              <button class="btn btn-block btn-outline-secondary mb-2">Helpdesk Teknik</button>
                              <button class="btn btn-block btn-outline-secondary mb-2">Helpdesk FIP</button>                       
                              <button class="btn btn-block btn-outline-secondary mb-2">Helpdesk FE</button>
                  </div>
                </div>
              <div class="card border-0 shadow-sm mt-4">
                <div class="card-header text-center"  style="background-color:  #0C134F; color:#ffffff">
                  <h2>Panduan</h2>
                </div>
                <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-block btn-outline-secondary mb-2">Tentang kami</button>
                      <button type="button" class="btn btn-block btn-outline-secondary mb-2">Panduan Dosen</button>
                      <button type="button" class="btn btn-block btn-outline-secondary mb-2">Panduan Mahasiswa</button>
                      <button type="button" class="btn btn-block btn-outline-secondary mb-2">Q & A</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card border-0 shadow-sm mt-4  ">
                <div class="card-header text-center"  style=" background-color:  #0C134F; color:#ffffff">
                  <h2>Kalender</h2>
                </div>
                <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                  <div id='calendar'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

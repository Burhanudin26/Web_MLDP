
    @extends('bar')
    @section('main')

        <div class="section" style="background-color:rgb(191, 225, 255)">
            <div class="container-fluid p-3">
              <div class="row">
                <div class="card text-bg-dark mb-4 mt-2" >
                  <img src="img/banner.png" class="card-img" style="max-height: 200px" alt="...">
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="card border-0 shadow-sm" style="min-height: 500px">
                        <div class="card-header text-center" style="background-color:  #0C134F; color:#ffffff">
                            <h2>Mata Kuliah</h2>
                        </div>
                        <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                          <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="/attendance/create">
                                    <button class="btn btn-primary btn-block" style="min-width:400px">Matematika Komputer</button>
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
                  </div>
                <div class="col-lg-3 mb-2">
                  <div class="card border-0 shadow-sm mb-4" style="min-height: 500px">
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
                </div>
                <div class="col-lg-3 mb-2">
                  <div class="card border-0 shadow-sm mb-4" style="min-height: 500px">
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
                </div>
                <div class="col-lg-3 mb-2">
                  <div class="card border-0 shadow-sm mb-4"  style="min-height: 500px">
                    <div class="card-header text-center"  style=" background-color:  #0C134F; color:#ffffff">
                      <h2>Kalender</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="background-color:#ffffff">
                      <div id='calendar'></div>
                    </div>
                  </div>
                </div>
                <div class="card border-0 shadow-sm" style="bottom: 0; left: 0; right: 0">
                  <div class="card-header text-center" style="background-color: #0C134F; color: #ffffff">
                      <h2>About</h2>
                  </div>
                  <div class="card-body text-center rounded-bottom" style=" background-color: #ffffff;">
                      <div id="page" class="container-fluid">
                          <div class="row">
                              <div class="col">
                              <img src="img/mldp_logo.png" class="card-img" style="scale:50%;" alt="...">
                              </div>
                              <div class="col">
                                  <h3>Description</h3>
                                  <p style="text-align: justify">MLDP adalah sebuah website yang akan memudahkan mahasiswa dalam 
                                    melakukan presensi dan sekaligus memudahkan pengajar untuk mengawasi mahasiswanya. 
                                    Website MLDP memanfaatkan sistem GPS untuk mengetahui lokasi mahasiswa. 
                                    Geolocation API digunakan untuk mengakses GPS dan mengambil lokasi dari 
                                    mahasiswa berupa kordinat Latitude dan Longitude.</p>
                                  <!-- Add additional information here -->
                              </div>
                          </div>
                          <div class="row">
                        <!-- Level 2: Address -->
                        <div class="col-md-4">
                          <p><i class="fas fa-map-marker-alt"></i> Address : Jl. Semarang No.5, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                        </div>
                        <!-- Level 2: Email -->
                        <div class="col-md-4">
                          <p><i class="far fa-envelope"></i> Email : sipejar@um.ac.id</p>
                        </div>
                        <!-- Level 2: Telephone Number -->
                        <div class="col-md-4">
                          <p><i class="fas fa-phone"></i> Telephone : 0341-551312</p>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
              </div>
            </div>
          </div>
    @endsection
    
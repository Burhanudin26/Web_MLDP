{{-- 
    Dosen bisa :
- Melihat, Mengupdate Akun (self)
- Melihat, Mengupdate Matkul (self)
- Melihat, Mengupdate Matkul Mahasiswa
- Melihat, Mengupdate Presensi (self)
- Melihat Presensi Mahasiswa
- Melihat, Mengupdate Tanggal
- Melihat Panduan
- Melihat About
- Melihat Promotional 
    --}}
    @extends('bar')
    @section('main')

        <div class="section" style="background-color:rgb(191, 225, 255)">
            <div class="container-fluid p-3">
              <div class="row">
                <div class="card text-bg-dark mb-4 mt-2" >
                  <img src="img/Dekstop_mawar.png" class="card-img" style="max-height: 200px" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="col-lg-9 mb-4">
                  <div class="card border-0 shadow-sm ">
                    <div class="card-header text-center " style=" background-color:#5C469C; color: #D4ADFC ">
                      <h2>Promotional</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="height: fit-content;   background-color: #D4ADFC">
                      <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/dekstop_mawar.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/Guizhongli.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="img/Guizhongli2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header text-center" style=" background-color: #5C469C; color: #D4ADFC">
                      <h2>About</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="height:400px; background-color: #D4ADFC;">
                      <div id="page" class="container-fluid">
                      </div>
                  </div>
    
                  </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header text-center" style="background-color: #5C469C; color: #D4ADFC">
                            <h2>Matkul</h2>
                        </div>
                        <div class="card-body text-center rounded-bottom" style="background-color: #D4ADFC">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2">
                                    <button class="btn btn-primary btn-block">Matkom</button>
                                </li>
                                <li class="mb-2">
                                    <button class="btn btn-primary btn-block">Pemrograman Web</button>
                                </li>
                                <li class="mb-2">
                                    <button class="btn btn-primary btn-block">Pemrograman berorientasi objek</button>
                                </li>
                                <li class="mb-2">
                                    <button class="btn btn-primary btn-block">Probabilitas dan statistika</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card border-0 shadow-sm mt-4">
                      <div class="card-header text-center" style="background-color: #5C469C; color: #D4ADFC">
                          <h2>Helpdesk</h2>
                      </div>
                      <div class="card-body text-center rounded-bottom" style="background-color: #D4ADFC">
                          <ul class="list-unstyled mb-0">
                              <li class="mb-2">
                                  <button class="btn btn-primary btn-block">Helpdesk FIP</button>
                              </li>
                              <li class="mb-2">
                                  <button class="btn btn-primary btn-block">Helpdesk Teknik</button>
                              </li>
                              <li class="mb-2">
                                  <button class="btn btn-primary btn-block">Helpdesk FIP</button>
                              </li>
                              <li class="mb-2">
                                  <button class="btn btn-primary btn-block">Helpdesk FE</button>
                              </li>
                          </ul>
                      </div>
                    </div>
                  <div class="card border-0 shadow-sm mt-4">
                    <div class="card-header text-center"  style="background-color: #5C469C; color: #D4ADFC">
                      <h2>Panduan</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="background-color: #D4ADFC">
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
                    <div class="card-header text-center"  style=" background-color: #5C469C; color: #D4ADFC">
                      <h2>Kalender</h2>
                    </div>
                    <div class="card-body text-center rounded-bottom" style="background-color: #D4ADFC">
                      <div id='calendar'></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    @endsection
    
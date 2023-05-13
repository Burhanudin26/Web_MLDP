<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <style>
    .gundam{
        background-color: rgb(50, 47, 54);
        color: white
      }
    
    #calendar {
      max-width: 1100px;
      margin: 4px auto;
    }
    .nav-pills li a:hover{
      background-color: #000000 
    }
    </style>
    <title>MAIN MENU</title>
</head>
<body>
</div>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header" style="background-color: #5C469C; color:#D4ADFC">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: #D4ADFC">
      <ul class="nav nav-pills flex-column mt-4">
        <li class="nav-item py-2 py-sm-0">
          <a href="#" class="nav-link text-white" aria-current="page">
            <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
          </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
          <a href="#" class="nav-link text-white" aria-current="page">
            <i class="fs-5 fa fa-house"></i><span class="fs-4 ms-3 d-none d-sm-inline">Active</span>
          </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
          <a href="#" class="nav-link text-white" aria-current="page">
            <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Article</span>
          </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
          <a href="#" class="nav-link text-white" aria-current="page">
            <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms-3 d-none d-sm-inline">Products</span>
          </a>
        </li>
        <li class="nav-item py-2 py-sm-0">
          <a href="#" class="nav-link text-white" aria-current="page">
            <i class="fs-5 fa fa-users"></i><span class="fs-4 ms-3 d-none d-sm-inline">Customers</span>
          </a>
        </li>
      </ul>    
    </div>
  </div>
    <main>
      
        <nav class="navbar navbar-expand-md navbar-light shadow-md sticky-top" style="background-color:#1D267D">
            <div class="container-fluid">
              
              <button class="btn btn-primary mr-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">sidebar</button>
                <a class="navbar-brand" href="{{ url('/') }}" style="color:honeydew">
                    Check Profile
                </a>
                @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{url('admin')}}" style="color:honeydew">Halaman Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('dosen')}}" style="color:honeydew">Halaman Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('mahasiswa')}}" style="color:honeydew">Halaman Mahasiswa</a>
                        </li>
                    </ul>

                @endauth
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"style="color:honeydew">{{ __('Login') }} </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"style="color:honeydew">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:honeydew">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="color:honeydew">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="section" style="background-color: #0C134F">
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
                  <div class="card border-0 shadow-sm">
                    <div class="card-body rounded-1" style="display:flex; align-items:center; justify-content:center;  background-color: #D4ADFC">
                      @yield('content')
                    </div>
                  </div>
                  <div class="card border-0 shadow-sm mt-4 "> 
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
                    <div class="card-body text-center rounded-bottom" style="height:400px;  background-color: #D4ADFC">
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
            <div class="footer">
              <div class="text-center p-3" style="background-color:#1D267D">
              <a class="text-light">© 2023 Copyright: Kelompok 8</a>
              </div>
            </div>
          </div>
    </main>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="fontawesome-free-6.4.0-web/js/all.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });

</script>
</body>
</html>

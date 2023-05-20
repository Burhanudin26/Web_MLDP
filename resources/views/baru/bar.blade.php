
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
        <nav  class="navbar navbar-expand-md navbar-light shadow-md sticky-top" style="background-color:#1D267D">
                <div class="container-fluid">
                    <a href="#" class="nav-link text-white mr-4"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="fs-5 fa fa-house"></i>
                    </a>
                <a class="navbar-brand text-white" href="#">Profile</a>
                @if (Auth::check())
                    <div>
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->role }}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <div>
                        <a class="navbar-brand text-white " href="#" id="login-link">Login</a>
                    </div>
                @endif
            </nav>
        </div>

        <form method="POST" action="/login" id="login-form" style="display:none">
            @csrf
            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
            @if ($errors->has('login'))
                <div class="alert alert-danger">
                    {{ $errors->first('login') }}
                </div>
            @endif
        </form>

        <script>
            document.getElementById('login-link').addEventListener('click', function() {
                document.getElementById('login-form').style.display = 'block';
            });
        </script>


        {{-- <nav class="navbar navbar-expand-md navbar-light shadow-md sticky-top" style="background-color:#1D267D">
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
        </nav> --}}
        @yield('main')
          <div class="footer">
              <div class="text-center p-3" style="background-color:#1D267D">
              <a class="text-light">© 2023 Copyright: Kelompok 8</a>
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
  document.getElementById('login-link').addEventListener('click', function() {
                document.getElementById('login-form').style.display = 'block';
            });

</script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url("css/bootstrap.min.css")  }}>
    <link rel="stylesheet" href={{ url("fontawesome-free-6.4.0-web/css/all.min.css") }}>
    <style>
    #calendar {
      max-width: 1100px;
      margin: 4px auto;
    }
    .nav-pills li a:hover{
      background-color: #000000 
    }
    </style>
    <title>MLDP</title>
</head>
<body>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header" style="background-color: #0C134F; color:#ffffff">
      <a href="#"><h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Dashboard</h5></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="background-color: #ffffff">
      @yield('side')
      
    </div>
  </div>
    <main>
        <nav  class="navbar navbar-expand-md navbar-light shadow-md sticky-top" style="background-color:#1D267D; max-height:50px">
                <div class="container-fluid" style="max-height: 50px">
                  <a class="btn text-white mr-5" href="{{ url()->previous() }}">
                    <i class="fas fa-arrow-left"></i> Back
                  </a>                
                    <a href="#" class="nav-link text-white mr-4"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="fs-5 fa fa-house"></i>
                    </a>
                    <a class="navbar-link text-white" style="scale: 7%; max-width:80px" href="#">  <img src="img/mldp_white.png" alt="" srcset=""></a>
                    @if (Auth::check())
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="nav-link text-white" style="background: none; border: none; cursor: pointer;">Logout</button>
                                </form>
                            </li>
                        @endguest
                    </ul>
                @endif
                
            </nav>
        </div>

        
       
      @yield('main')
          <div class="footer sticky-bottom">
              <div class="text-center p-3" style="background-color:#1D267D">
              <a class="text-light">© 2023 Copyright: Kelompok 8</a>
              </div>
          </div>
          
    </main>
<script src={{ url("js/bootstrap.bundle.min.js") }}></script>
<script src={{ url("fontawesome-free-6.4.0-web/js/all.min.js") }}></script>
<script src={{ url('https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js') }}></script>
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

@extends('bar')

@section('main')
<header class="page-header">
  <div class="profile-section pt-3 pb-3">
    <div class="profile-card card bg-purple">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="container text-left">
            <div class="row align-items-center">
              <div class="col-3">
                <a href="" class="d-inline-block profile-link">
                  <img src="https://lh3.googleusercontent.com/proxy/esjjzRYoXlhgNYXqU8Gf_3lu6V-eONTnymkLzdwQ6F6z0MWAqIwIpqgq_lk4caRIZF_0Uqb5U8NWNrJcaeTuCjp7xZlpL48JDx-qzAXSTh00AVVqBoT7MJ0259pik9mnQ1LldFLfHZUGDGY=w1200-h630-p-k-no-nu" class="profile-pic" width="100" height="100"></a>
              </div>
              <div class="col">
                <h1 class="profile-name">Nama Mahasiswa</h1>
              </div>
              <div class="col-1">
                <a href="#" class="settings-link">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="details-section pt-3 pb-3">
      <div class="details-card card bg-purple">
        <div class="card-body">
          <article class="row">
            <section class="col">
              <h2>Biodata</h2>
            </section>
          </article>

          <article class="row">
            <section class="col-sm-8">
              <h3>Email</h3>
              <p>email@email.com</p>
            </section>
          </article>

          <article class="row">
            <section class="col-sm-6">
              <h3>Alamat</h3>
              <p>JL 1221 </p>
            </section>
          </article>

          <article class="row">
            <section class="col-sm-12">
              <a href="/ubah" class="btn btn-purple">Ubah Profil</a>
            </section>
          </article>

        </div>
      </div>
    </div>
  </div>
</header>
@endsection

<style>
  .profile-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .profile-card {
    width: 100%;
    max-width: 500px;
    margin-bottom: 2em;
    color: rgb(0, 0, 0);
  }

  .profile-link:hover img.profile-pic {
    transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -moz-transition: all 1s ease-in-out;
    -webkit-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .profile-name {
    font-size: 2em;
    margin-top: 1em;
  }

  .settings-link {
    color: white;
    transition: all 0.3s ease-in-out;
  }

  .settings-link:hover svg {
    transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -moz-transition: all 1s ease-in-out;
    -webkit-transition: all 1s ease-in-out;
    -o-transition: all 1s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .details-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .details-card {
    width: 100%;
    max-width: 500px;
    margin-bottom: 2em;
    color: rgb(0, 0, 0);
  }

  .btn-purple {
    background-color: #6d4c41;
    border-color: #6d4c41;
    color: white;
  }

  .btn-purple:hover {
    background-color: #8d6e63;
    border-color: #8d6e63;
    color: white;
  }
</style>

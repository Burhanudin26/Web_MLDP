{{--
    Guest bisa:
- Melihat About
- Melihat Panduan
- Melihat Matkul (Self)
- Melihat dan mengupdate Login
    --}}

    @extends('bar')

@section('main')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Selamat Datang!</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="username" type="text" name="username" placeholder="Username" required />
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password" required />
                                <label for="password">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="#">Lupa Password?</a>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<style>
    .welcome-frame {
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .container {
        flex: 1;
        max-width: 600px; /* Mengubah nilai max-width sesuai kebutuhan Anda */
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
    }

    h1 {
        color: #333;
        font-size: 28px;
        margin-bottom: 20px;
    }

    p {
        color: #666;
        font-size: 18px;
        line-height: 1.5;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    .login-form input {
        padding: 5px;
        margin-bottom: 10px;
        width: 200px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .login-form button {
        padding: 8px 20px;
        background-color: #5C469C;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

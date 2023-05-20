@extends('bar')

@section('main')
    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Guest</title>
    </head>
    <body style="font-family: Arial, sans-serif; background-color: transparent; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh;">
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

        <div class="container">
            <div class="welcome-frame">
                <h1>Selamat Datang, Tamu!</h1>
                <form class="login-form">
                    <input type="text" placeholder="Username">
                    <input type="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </body>
    </html>
@endsection

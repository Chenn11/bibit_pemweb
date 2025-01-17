<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.topscript')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            color: #333;
        }

        .form-control {
            border-radius: 30px;
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(81, 203, 238, 1);
            border-color: #51cbee;
        }

        .btn-primary {
            border-radius: 30px;
            padding: 10px 20px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border: none;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background: #2575fc;
            transform: scale(1.05);
        }

        .small.text-muted {
            color: #6c757d !important;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="card">
            <div class="text-center mb-4">
                <a href="./index.html">
                    <svg version="1.1" id="logo" class="brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                        </g>
                    </svg>
                </a>
                <h2 class="my-3">Register</h2>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">Konfirmasi Kata Sandi</label>
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="mb-4">
                    <p class="mb-2">Persyaratan Kata Sandi:</p>
                    <ul>
                        <li>Minimal 8 karakter</li>
                        <li>Minimal satu karakter khusus</li>
                        <li>Minimal satu angka</li>
                        <li>Tidak boleh sama dengan kata sandi sebelumnya</li>
                    </ul>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                <p class="mt-4 text-center text-muted">© 2025</p>
            </form>
        </div>
    </div>
    @include('admin.components.bottomscript')
</body>
</html>

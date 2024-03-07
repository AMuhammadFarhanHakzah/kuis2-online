<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Daftar</title>

    @include('components.style')
</head>

<body class="bg-soft-blue">

    <div class="container">
        <div class="row align-items-center justify-content-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card border-0">
                    <div class="card-body">
                        <a href="." class="logo mb-5">
                            <img src="assets/images/logo.png" alt="Logo">
                            <h4 class="text-dark fw-bold">Quizz</h4>
                        </a>

                        <h5 class="text-dark fw-bold mb-4">Sign Up</h5>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="mb-1">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control" placeholder="Tulis nama kamu"
                                    autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-1">Alamat Email</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Tulis alamat email kamu">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="mb-1">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Masukkan password kamu">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="mb-1">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <button class="btn btn-primary d-block w-100 mb-3" type="submit">Sign Up</button>
                            <p class="mb-0 text-secondary text-center">
                                Sudah memiliki akun? <a href="login">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.script')
</body>

</html>

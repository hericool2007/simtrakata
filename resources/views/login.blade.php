<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMTRAKATA</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- BootStrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("/img/kp3b.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div class="container ">
        <div class="row p-5">
            <div data-aos="fade-right" class="col align-self-end bg-secondary p-2 text-white" style="--bs-bg-opacity: .5;">
                <h2>SIMTRAKATA</h2>
                <h4>Sistem Informasi Manajemen Transfer Kabupaten / Kota</h4>
            </div>
            <div class="col-md-4">
                @if (session()->has('berhasil'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasil') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Route::has('login'))
                    @auth
                        {{-- data-aos="fade-in" data-aos-delay="1000" --}}
                        <div class="col-md-10 p-4  ms-3 bg-dark p-2 text-white" style="--bs-bg-opacity: .5;">
                            <!-- User image -->
                            <div class="d-flex mx-auto">
                                <img src="/img/Prov.png" class="img-thumbnail rounded-circle" alt="User Image" width="100">
                                <p class="text-white fw-bold ms-4 mt-2"> {{ auth()->user()->name }}</p>
                            </div>

                            <!-- Menu Footer-->
                            <div class="text-white fw-bold m-2">
                                <a href="/dash" class="btn btn-info ">Dashboard</a>
                                <a href="/logout" class="btn btn-warning ">Sign out</a>
                            </div>
                        </div>
                    @else
                        <main class="mt-5" data-aos="fade-in" data-aos-delay="1000">
                            <h4 class=" mb-3 text-center text-white bg-success p-2" style="--bs-bg-opacity: .2;">
                                Silahkan
                                Masuk
                            </h4>
                            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-floating">
                                    <input type="user" name="user_name" class="form-control" id="user_name"
                                        placeholder="Nama User" @error('user_name') is-invalid @enderror required
                                        value="{{ old('user_name') }}" autofocus>
                                    <label for="user_name">Nama User</label>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                            </form>
                        </main>

                    @endauth
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000,
        });
    </script>
</body>

</html>

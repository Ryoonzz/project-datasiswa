<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
    <title>Register | SMKN 2 Bangkalan</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/assets/img/favicon.png') }}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box2">
                    <div class="left">
                        <div class="content">
                            <div class="header">
                                <div class="logo text-center"><img src="{{ asset('admin/logo-smkn2.png') }}"
                                        alt="Klorofil Logo"></div>
                                <p class="lead">Buat akun anda</p>
                            </div>
                            <form class="form-auth-small" action="/postregister" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="signup-nama" class="control-label sr-only">Nama Lengkap</label>
                                    <input name="nama" type="text" class="form-control" id="signup-nama"
                                        placeholder="Masukkan Nama Lengkap">
                                </div>

                                <div class="form-group">
                                    <label for="signup-jenis_kelamin" class="control-label sr-only">Jenis
                                        Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" id="signup-jenis_kelamin">
                                        <option value="" selected>Jenis kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="signup-agama" class="control-label sr-only">Agama</label>
                                    <input name="agama" type="text" class="form-control" id="signup-agama"
                                        placeholder="Masukkan Agama">
                                </div>

                                <div class="form-group">
                                    <label for="signup-alamat" class="control-label sr-only">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="signup-alamat" rows="3" placeholder="Masukkan Alamat"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input name="email" type="email" class="form-control" id="signup-email"
                                        placeholder="Masukkan Email">
                                </div>

                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input name="password" type="password" class="form-control" id="signup-password"
                                        placeholder="Masukkan Password">
                                </div>

                                {{-- <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button> --}}
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="REGISTER">
                            </form>
                            <p>Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="overlay"></div>
                        <div class="content text">
                            <h1 class="heading">Aplikasi Pengelolaan Data Siswa</h1>
                            <p>by SMK 2 Bangkalan</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

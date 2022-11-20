<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anada - Data Science & Analytics Template">

    <!-- ========== Page Title ========== -->
    <title>Login Pengguna</title>

    @include('perusahaan.link.head')
</head>

<body class="bg-gradient">

    <!-- Start Login 
    ============================================= -->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="login">
                            <div class="content">
                                <a href="index.html"><img src="assets/img/logo.png" alt="Logo"></a>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input class="form-control" placeholder="Email*" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input class="form-control" placeholder="Password*" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="link align-right">
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <button type="submit">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="sign-up">
                                    <p>
                                        Belum punya akun? <a href="{{ route('daftar-perusahaan') }}">Daftar sekarang</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login -->

    @include('perusahaan.link.body')

</body>
</html>
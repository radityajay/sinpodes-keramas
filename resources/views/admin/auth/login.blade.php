<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Sinpodes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Smart-Be" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="/assets/images/sample-logo.png"> --}}

        <!-- Bootstrap Css -->
        <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="/assets/css/page-auth.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    </head>

    <body class="auth-body-bg">
        <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <h2 class="brand-text text-primary ml-1">Sinpodes</h2>
                                </a>

                                <h4 class="card-title mb-1">Selamat datang di Sinpodes 👋</h4>
                                <p class="card-text mb-2">Silahkan Login</p>

                                <form class="form-validation" method="POST" action="{{route('admin.loginsend')}}">
                                @csrf
                                    <div class="form-group mb-3">
                                        <label for="login-email" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="login-email" name="username" placeholder="Masukan username" aria-describedby="username" value="{{old('username')}}"/>
                                        @if ($errors->any())
                                            @foreach ($errors->getMessages() as $key => $val)
                                                @if($key == "username")
                                                    <div style="color: red;"> {{ $errors->first('username') }}</div>
                                                @endif

                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Password</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-merge" id="password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" value="{{old('password')}}"/>
                                            @if ($errors->any())
                                                @foreach ($errors->getMessages() as $key => $val)
                                                    @if($key == "password")
                                                        <div style="color: red;"> {{ $errors->first('password') }}</div>
                                                    @endif

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block w-100" tabindex="4">Login</button>
                                </form>

                                {{-- <div class="divider my-2 text-center">
                                    <div class="divider-text">or</div>
                                </div> --}}

                                {{-- lokasi untuk pendaftarn akun dengan gmail --}}
                                {{-- <div class="auth-footer-btn d-flex justify-content-center">
                                    <a href="javascript:void(0)" class="btn btn-facebook">
                                        <i data-feather="facebook"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-twitter white">
                                        <i data-feather="twitter"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-google">
                                        <i data-feather="mail"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-github">
                                        <i data-feather="github"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
            <?php
                if (session()->has('success')) {
                    $message = session()->get('success');
                    echo "swal(
                        'Success',
                        '<strong>Success! </strong>" . $message . "',
                        'success');";
                }
                if (session()->has('error')) {
                    $message = session()->get('error');
                    echo "swal(
                        'error',
                        '<strong>Error! </strong>" . $message . "',
                        'error');";
                }
                ?>
        </script>
    </body>
</html>

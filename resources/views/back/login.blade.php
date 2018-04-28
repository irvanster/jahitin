<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Login - Jahit.in CMS Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adm/css/lib/bootstrap/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('adm/css/helper.css') }} " rel="stylesheet">
    <link href="{{ asset('adm/css/style.css') }} " rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- All Jquery -->
    <script src="{{ asset('adm/js/lib/jquery/jquery.min.js') }} "></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('adm/js/lib/bootstrap/js/popper.min.js') }} "></script>
    <script src="{{ asset('adm/js/lib/bootstrap/js/bootstrap.min.js') }} "></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('adm/js/jquery.slimscroll.js') }} "></script>
    <!--Menu sidebar -->
    <script src="{{ asset('adm/js/sidebarmenu.js') }} "></script>
    <!--stickey kit -->
    <script src="{{ asset('adm/js/lib/sticky-kit-master/dist/sticky-kit.min.js') }} "></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('adm/js/custom.min.js') }} "></script>
    @stack('scripts')
</head>
<body>
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4>Login</h4>
                            @if($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$errors->first()}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('b.store.login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" name="email" required autofocus>
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" name="password" required>
                                @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                                @endif
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
                                        </div>
                                    </label>
                                    <label class="pull-right">
                                            <a href="#">Forgotten Password?</a>
                                    </label>

                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

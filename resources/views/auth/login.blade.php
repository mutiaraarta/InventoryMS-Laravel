<!doctype html>
<html lang="en" class="fullscreen-bg">
<head>
    <title>Login | RPS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- ICONS -->
    <link rel="fav-touch-icon" sizes="100x100" href="{{ asset('assets/img/fav-icon.jpg') }}">
    <link rel="icon" type="image/jpg" sizes="150x150" href="{{ asset('assets/img/fav-icon.jpg') }}">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #wrapper {
            height: 100%;
        }

        .wrapper {
            min-height: 100vh;
            background: linear-gradient(rgba(65, 65, 65, 0.74), rgba(10, 10, 10, 0.4)),
                        url('{{ asset('assets/img/login.png') }}') center center / cover no-repeat;
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-box {
            background: #fff;
            padding: 30px 25px;
            width: 100%;
            max-width: 350px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 8px;
            text-align: center;
        }

        .auth-box .header {
            margin-bottom: 25px;
        }

        .auth-box .header p.lead {
            font-size: 18px;
            font-weight: 600;
        }

        .auth-box .form-group {
            text-align: left;
        }

        .btn-block {
            width: 100%;
        }

        .vertical-align-wrap {
            width: 100%;
        }
    </style>

</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="wrapper">
                <div class="auth-box">
                    <div class="content">
                        <div class="header">
                            <img src="{{ asset('assets/img/icon.png') }}" alt="Logo RPS" style="max-width: 120px; margin-bottom: 10px;">
                            <p class="lead">Login to Your Account</p>
                        </div>

                        <form class="form-auth-small" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="signin-email" value="{{ old('email') }}" required placeholder="Email">
                                @if ($errors->has('email'))
                                <br>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong><i class="icon fa fa-ban"></i> Alert!</strong> &nbsp; {{ $errors->first('email') }}
                                </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" name="password" id="signin-password" value="{{ old('password') }}" required placeholder="Password">
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span>Remember me</span>
                                </label>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg btn-block">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- Optional JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- If you use iCheck, include plugin -->
    <!-- <script src="path/to/icheck.min.js"></script> -->
    <script type="text/javascript">
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>
</html>

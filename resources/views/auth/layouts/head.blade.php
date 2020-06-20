<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Expert Finder</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('user/login_reg/images/icons/favicon.ico') }}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/login_reg/css/main.css') }}">
    <!--===============================================================================================-->
    <style>
        .header-area {
            background-color: #001D38;
        }
        .wrap-login100 {
            padding: 50px 55px 33px 55px;

        }
        .wrap-input100 {
            margin-bottom: 0;
            margin-top: 30px;
        }
        .is-invalid {
            border-bottom: 2px solid #dc3545 !important;
        }
        .invalid-feedback {
            display: inline-block;
            margin-top: .25rem;
            font-size: .875rem;
            color: #dc3545;
        }
        .container-login100-form-btn {
            padding-top: 47px;
        }
    </style>

    @stack('links')
</head>
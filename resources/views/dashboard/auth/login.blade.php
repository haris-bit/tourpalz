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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/')}}/logo/logo-dark.png">
    <title>Tourpalz | Sign In</title>
    <!-- page css -->
    <link href="{{ asset('public/')}}/dashboard/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('public/')}}/dashboard/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ asset('public/')}}/dashboard/dist/css/custom.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
form{
    text-align: center;
}
</style>
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Tourpalz</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{ asset('public/')}}/dashboard/assets/images/background/login-bg.jpg);">
            <div class="login-box card">
                <div class="card-body bg-primary-color">
                    <form class="form-horizontal form-material"  id="loginform" method="POST" action="{{ route('frontend.login.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                       <img src="{{ asset('public/')}}/logo/logo.png" class="login-logo" width="200">
                        <h3 class="text-center m-b-20">Sign In</h3>
                        @include('dashboard.layouts.partials.flash-message')
                        
                        <div class="form-group ">
                            <div class="col-xs-12">

                             
                                <input id="email" class="form-control @error('username') is-invalid @enderror" type="text" placeholder="Username"  name="username" value="{{ old('username') }}" required  autofocus> </div>
                                @error('username')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"> </div>
                                @error('password')
                                    <span>
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>
                       
                        
                    </form>
                   
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/popper/popper.min.js"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/bootstrap/{{ asset('public/')}}/dashboard/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    
</body>

</html>

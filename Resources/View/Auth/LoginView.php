
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <script type="application/javascript" src="PreRequisites/jQuery_v3.6.0.js"></script>
    <link rel="stylesheet" href="Resources/CSS/adminlte.css">
    <link rel="stylesheet" href="Resources/CSS/fontawesome-free/css/all.min.css">
    <style>
        .callout {
            border-radius: .5rem;
            /* box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%); */
            background-color: #fff;
            border-left: 5px solid #e9ecef;
            margin-bottom: 1rem;
            padding: 0.5rem;
        }

        .closeCallout {
            outline: 0 !important;
        }
        .b-lr-1{
        border-left: 1px solid lightgray;
        border-right: 1px solid lightgray;}
    </style>
    <script>
        $(document).ready(function () {
            $('body').on('click', 'button.closeCallout', function () {
                $(this).parent().parent().remove();
            });
        });

    </script>
</head>
<body
    class="hold-transition @if(request()->is('login') or request()->is('password/reset'))login-page @endif @if(request()->is('register')) register-page @endif" style="background-color:#0b5793;height: 75vh;">
<div
    class="@if(request()->is('login') or request()->is('password/reset') )login-box @endif @if(request()->is('register')) register-box @endif">
    <div class="login-logo @if(request()->is('register')) register-logo @endif">
        <a class="navbar-brand" href="" style="padding:0px;width:300px;">
                       
                            <img class="logo_img" href=""
                                 src="https://via.placeholder.com/250">
                       
                    </a>
        <!--<a href="#"></a>-->
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="ca rd-body login-card-body yellow">
        <div class="login-logo @if(request()->is('register')) register-logo @endif">

        <a href="#">Elib IGC</a>
    </div>
            <p class="login-box-msg">Sign in to start session</p>
            <br>
            <form method="POST" action="" id="loginForm">
                
                <div class="input-group mb-3">
                  <!-- class="form-control @error('email') is-invalid @enderror " -->
                    <input id="email" type="text" class="form-control" name="email" " autofocus
                           placeholder="Enter your Student ID">
                    <div class="input-group-append">
                        <div class="input-group-text">

                        </div>
                    </div>
                    <!-- @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                    @enderror -->
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control " name="password"
                           required autocomplete="current-password" placeholder="Enter your password">
                    <div class="input-group-append">
                        <div class="input-group-text">

                        </div>
                    </div>
                    <!-- @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                    @enderror -->
                </div>
               
                <p class="mb-1">
                   <br>
                </p>
            
                <!-- <p class="mb-0">
                    <a href="" class="text-center">Register</a>
                </p> -->
                <br><br><br>

            <!-- /.social-auth-links -->

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" >
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-sm btn-dark btn-block">Sign In</button>
                    </div>

                    <!-- /.col -->
                </div>
            </form>


        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


</body>
</html>


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
<body>
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
                <img class="logo_img" src="https://via.placeholder.com/250" alt="Logo">
            </a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <h3 class="login-box-msg">Sign in to start session</h3>
                <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                    <p class="error-msg">Invalid credentials. Please try again.</p>
                <?php endif; ?>
                <form id="loginForm" method="POST" action="">
                    <div class="input-group mb-3">
                        <input id="email" type="text" class="form-control" name="email" autofocus placeholder="Enter your Student ID">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Enter your password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <script src="Resources/JS/LoginJs.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/registerStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Register</title>
    </head>
    <body>
        <?php
            include_once "header.php";
        ?>
        <main class="container text-center">
            <div class="sign-in">
                <!--Logo-->
                <div class="row">
                    <div class="col-lg">
                        <img src="images/logo.png" class="mw-100" alt="logo">
                        <h1 class="h3 mb-3 font-weight-normal text-white">Register here</h1>
                    </div>
                </div>
                <!--Form box-->
                <!--Username and password-->
                <form action="register.php" method="POST">
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email" 
                                data-toggle="popover" title="Email is taken" data-content="Consider login?" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="rePass" name="rePass" placeholder="Re-enter password" 
                                data-toggle="popover" title="Password does not match?" data-content="Please enter the same password as above" required>
                                <div class="badge bg-light text-wrap" id="message" style="width: 6rem;"></div>
                            </div>
                            <div class="checkbox mb-3 text-white">
                                <label>
                                    <input type="checkbox" value="remember-me" required> I agree to the <a class="text-white font-italic badge badge-primary text-wrap" href="tnc.php">term and condition</a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Register button-->
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-light btn-lg btn-block">Register</button>
                                <a class="text-white font-italic badge badge-primary text-wrap" href="registerHotelier.php">Hotelier? Register here</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <?php
            include_once "footer.php";
        ?>
        <script>
            $('#password, #rePass').on('keyup', function () {
                $('#rePass').popover('disable')

                document.getElementById("submit").disabled = true

                if ($('#password').val() == $('#rePass').val()) {
                    $('#rePass').popover('hide')
                    document.getElementById("submit").disabled = false
                    
                } else if($('#password').val() != $('#rePass').val())  {
                    $('#rePass').popover('enable')
                    $('#rePass').popover('show') 
                }  
            });
        </script>
    </body>
</html>
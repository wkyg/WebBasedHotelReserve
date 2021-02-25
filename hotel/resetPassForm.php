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
            $user_name = $_GET["user_name"];
            $user_mail = $_GET["user_mail"];
        ?>
        <main class="container text-center">
            <div class="sign-in">
                <!--Logo-->
                <div class="row">
                    <div class="col-lg">
                        <img src="images/logo.png" class="mw-100" alt="logo">
                        <h1 class="h3 mb-3 font-weight-normal text-white">Enter your new password</h1>
                    </div>
                </div>
                <!--Form box-->
                <!--Username and password-->
                <form action="reset.php?user_name=<?=$user_name?>&user_mail=<?=$user_mail?>" method="POST">
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="rePass" name="rePass" placeholder="Re-enter password" 
                                data-toggle="popover" title="Password does not match?" data-content="Please enter the same password as above" required>
                                <div class="badge bg-light text-wrap" id="message" style="width: 6rem;"></div>
                            </div>
                        </div>
                    </div>
                    <!--Register button-->
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <button type="submit" id="submit" class="btn btn-light btn-lg btn-block">Change password</button>
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
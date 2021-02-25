<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/bookStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Reset password</title>
    </head>
    <body>
        <?php
            //error_reporting(0);

            $u_name = $_GET["u_name"];
            $u_mail = $_GET["u_mail"];

            $link = "http://localhost/WebBasedHotelReserve/hotel/resetPassForm.php?user_name=$u_name&user_mail=$u_mail";            

            $mailChk = mail($u_mail, "Password Reset", "Please follow this link in order to reset your password '$link'", "From: hotelfypp@gmail.com");

            if($mailChk){
                //echo "mail success";
            }else{
                header("location: resetFail.php");
            }
        ?>
        <main class="container pt-5 mt-5">
            <div class="jumbotron">
                <h1 class="display-4">Mail send</h1>
                    <p class="lead">You will receive an email from us soon</p>
                    <p class="lead">Please click on the link provided in the email to reset your password</p>
                    <p>To the home page!<a href="index.php"> Click here</a></p>
            </div>
        </main>
        <?php 
            include_once "footer.php";
        ?>
    </body>
<?php
    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv = "refresh" content = "3; url = index.php" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <title>Cancellation Success</title>
    </head>
    <body>
        <main class="container pt-5 mt-5">
            <div class="jumbotron">
                <h1 class="display-4">Cancellation success</h1>
                <p class="lead">You will be redirect to our homepage soon!</p>
                <p>Did not get redirected?<a href="index.php"> Click here</a></p>
            </div>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>
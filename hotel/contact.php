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
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Contact Us</title>
    </head>
    <body>
        <?php
            include_once "header.php";
        ?>
        <main class="container">
            <form action="mail.php" method="POST">
                <div class="jumbotron">
                    <h1 class="display-4">Let us help you out!</h1>
                    <p class="lead">Enter you email and enquiry below and we will get to you soon</p>
                    <p class="lead">
                        <input type="email" class="form-control form-control-lg" name="email" placeholder="abc@example.com" required>
                    </p>
                    <hr class="my-4">
                    <p>
                        <textarea class="form-control form-control-lg" name="content" placeholder="Enter your enquiry here" required></textarea>
                    </p>
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>
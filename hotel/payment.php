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
        <title>Book</title>
    </head>
    <body>
        <?php 
            include_once "header.php";
        ?>
    </body>
    <main class="container">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Please enter your details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <form action="payment.php" method="POST">
                                        <div class="form-group">
                                        <h5 class="card-title">Full name</h5>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name">
                                                </div>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last name">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Email</h5>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Re-enter email</h5>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Re-enter email">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Contact number</h5>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contact number">
                                        </div>
                                        <h5 class="card-title">Payment method</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="payatcounter">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Pay at front desk
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="banktrans">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Bank transfer
                                            </label>
                                        </div>
                                    </form>
                                    <a href="payment.php" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="asd">Pay now</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </main>
    <?php
        include_once "footer.php";
    ?>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</html>


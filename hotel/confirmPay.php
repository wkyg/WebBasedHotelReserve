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
        <title>Stripe payment gateway</title>
    </head>
    <body>
        <?php
            include_once "header.php";
            require ("config.php");    

            $user_id = $_SESSION["userID"];

            $total_price = $_POST["t-price"];
            $email = $_POST["email"];

            $room_num = $_GET["room_num"];    
            $room_id = $_GET["room_id"];
            $hotel_id = $_GET["hotel_id"];
            $pay_method = $_GET["pay_method"];
            $check_in = $_GET["check_in"];
            $check_out = $_GET["check_out"];

            $total_price *= 100;
        ?>
    </body>
    <main class="container">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pay with card</h3>
                </div>
                <div class="card-body">
                    <form action="submit.php?room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>&pay_method=<?=$pay_method?>&check_in=<?=$check_in?>&check_out=<?=$check_out?>&user_id=<?=$user_id?>" method="POST">
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="<?php echo $publishableKey ?>"
                            data-amount="<?php echo $total_price ?>"
                            data-name="Hotelah"
                            data-description="Room <?php echo $room_num ?> booking payment"
                            data-img="images/logo.png"
                            data-currency="myr"
                            data-email="<?php echo $email ?>">
                        </script>  
                        <input type="text" class="invisible" name="amount" value="<?php echo $total_price ?>" readonly>
                        <input type="text" class="invisible" name="des" value="Room <?php echo $room_num ?> booking" readonly>  
                    </form>                
                </div>
            </div>
        </div>
    </main>
</html>
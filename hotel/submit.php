<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <meta http-equiv = "refresh" content = "3; url = profilePage.php" /> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <title>Book Success</title>
    </head>
    <body>
        <?php
            require ("config.php");
            $amount = $_POST["amount"];
            $des = $_POST["des"];
            
            $user_id = $_GET["user_id"];
            $hotel_id = $_GET["hotel_id"];
            $room_id = $_GET["room_id"];
            $pay_method = $_GET["pay_method"];
            $user_id = $_GET["user_id"];
            $check_in = $_GET["check_in"];
            $check_out = $_GET["check_out"];

            if($pay_method == "banktrans"){
                $pay_method = "card";
            }

            if(isset($_POST['stripeToken'])){
                \Stripe\Stripe::setVerifySslCerts(false);
            
                $token = $_POST["stripeToken"];
            
                $data=\Stripe\Charge::create(array(
                    "amount"=>$amount,
                    "currency"=>"myr",
                    "description"=>$des,
                    "source"=>$token,
            
                ));

                //echo "<pre>";
                //print_r($data);
                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){
                    $sql = "INSERT INTO BOOKING (BOOK_ID, HOTEL_ID, ROOM_ID, BOOK_DATE, CHECK_IN, CHECK_OUT, PAYMENT_TYPE, USER_ID) VALUES ('', '$hotel_id', '$room_id', now(), '$check_in', '$check_out', '$pay_method', '$user_id')";                

                    if(mysqli_query($conn, $sql)){
                        echo "book success";
                        header("location: bookSuccess.php");                    
                    }else{
                        echo "fail";
                    }
                }else{
                    die("FATAL ERROR");
                }

                $conn->close();                
            }else{?>
                <main class="container pt-5 mt-5">
                    <div class="jumbotron">
                        <h1 class="display-4">Book failed</h1>
                        <p class="lead">You will be redirect to your profile soon!</p>
                        <p class="lead">Thank you for your bookings!</p>
                        <p>Did not get redirected?<a href="profilePage.php"> Click here</a></p>
                    </div>
                </main><?php
            }

            include_once "footer.php"
        ?>        
    </body>
</html>
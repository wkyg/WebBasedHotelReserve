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
        <title>Check out</title>
    </head>
    <body>
        <?php 
            include_once "header.php";

            $room_id = $_GET["room_id"];
            $hotel_id = $_GET["hotel_id"];
            $pay_method = $_GET["pay_method"];
            $user_id = $_SESSION["userID"];

            if($pay_method == "payatcounter"){
                $pay_method = "Pay at counter";
            }else{
                $pay_method = "Bank in";
            }

            print_r($_SESSION);

            echo $room_id.$hotel_id.$pay_method.$user_id;

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "INSERT INTO BOOKING (BOOK_ID, HOTEL_ID, ROOM_ID, BOOK_DATE, PAYMENT_TYPE, USER_ID) VALUES ('', '$hotel_id', '$room_id', now(), '$pay_method', '$user_id')";
                $sql2 = "UPDATE ROOM SET ROOM_AVAI = 'no' WHERE ROOM_ID = '$room_id'";

                if(mysqli_query($conn, $sql)){
                    echo "book success";
                    if(mysqli_query($conn, $sql2)){
                        echo "update success";
                        header("location: bookSuccess.php");
                    }else{
                        echo "update fail";
                    }
                }else{
                    echo "fail";
                }
            }else{
                die("FATAL ERROR");
            }

            $conn->close();
        ?>
    </body>
    <?php 
        include_once "footer.php";
    ?>
</html>
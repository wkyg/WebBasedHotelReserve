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
        <title>Cancel book mail</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            //print_r($_SESSION);

            $user = $_SESSION["user"];
            $user_id = $_SESSION["userID"];

            $book_id = $_GET["book_id"];
            $room_id = $_GET["room_id"];

            $link = "http://localhost/WebBasedHotelReserve/hotel/cancelBook.php?book_id=$book_id&room_id=$room_id";

            //echo "</br>".$user.$user_id;

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM USER WHERE USER_ID = '$user_id'";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    $u_email = $row["USER_EMAIL"];

                    //echo $u_email;
                }
            }else{
                die("FATAL ERROR");
            }

            $conn->close();

            $mailChk = mail($u_email, "Cancel booking", "Please follow this link in order to cancel your booking '$link'", "From: hotelfypp@gmail.com");

            if($mailChk){
                echo '<script>alert("Mail successfully send")</script>'; 
            }else{
                echo '<script>alert("Mail failed to send, please try again")</script>'; 
            }
        ?>
        <main class="container pt-5 mt-5">
            <div class="jumbotron">
                <h1 class="display-4">We are sorry to hear that you are cancelling your booking</h1>
                    <p class="lead">You will receive an email from us soon</p>
                    <p class="lead">Please click on the link provided in the email to cancel your booking</p>
            </div>
        </main>
        <?php 
            include_once "footer.php";
        ?>
    </body>
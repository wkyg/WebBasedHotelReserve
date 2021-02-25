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
        <title>Cancel book</title>
    </head>
    <body>
        <?php 
            include_once "header.php";

            $book_id = $_GET["book_id"];
            $room_id = $_GET["room_id"];

            print_r($_SESSION);

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "DELETE FROM BOOKING WHERE BOOK_ID = '$book_id'";
                $sql2 = "UPDATE ROOM SET ROOM_AVAI = 'yes' WHERE ROOM_ID = '$room_id'";

                if(mysqli_query($conn, $sql)){
                    echo "Booking successfully cancelled";
                    if(mysqli_query($conn, $sql2)){
                        echo "update success";
                        header("location: cancelSuccess.php");
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
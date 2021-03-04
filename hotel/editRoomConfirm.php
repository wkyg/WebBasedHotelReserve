<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv = "refresh" content = "3; url = profilePage.php" />-->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <title>Edit room</title>
    </head>
    <body>
        <main class="container">
            <?php
                $room_id = $_GET["room_id"];

                $room_type = $_POST["room-type"];
                $room_number = $_POST["room-num"];
                $room_avai = $_POST["room-avai"];
                $room_price = $_POST["room-price"];
         
                if($room_avai == "Available"){
                    $room_avai = "yes";
                }else{
                    $room_avai = "no";
                }

                $flag = FALSE; 
                
                //echo $room_type.$room_number.$room_avai.$room_price;

                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){                    
                    $sql = "UPDATE ROOM SET ROOM_TYPE='$room_type', ROOM_NUMBER='$room_number', ROOM_AVAI='$room_avai', ROOM_PRICE='$room_price' WHERE ROOM_ID = '$room_id'";

                    if(mysqli_query($conn, $sql)){
                        echo "updated";
                        $flag = TRUE;
                    }else{
                        echo "updated";
                    }

                    if($flag == TRUE){?>
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully updated</h1>                            
                            <p class="lead">Thank you!</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php
                    }else{?>
                        <div class="jumbotron">
                            <h1 class="display-4">Fail to update</h1>                            
                            <p class="lead">Try again?</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php
                    }
                }else{
                    die("FATAL ERROR");
                }
                $conn->close();
            ?>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>

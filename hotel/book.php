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

            //print_r($_SESSION);

            if($_SESSION["logged"] == FALSE){
                header("location: loginPage.php");
            }

            $room_id = $_GET["room_id"];
            $hotel_id = $_GET["hotel_id"];
            $user_id = $_SESSION["userID"];
            $date_in = $_SESSION["datein_result"];
            $date_out = $_SESSION["dateout_result"];

            $flag = FALSE;

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM ROOM WHERE ROOM_ID = '$room_id'";
                $sql2 = "SELECT HOTEL_NAME, HOTEL_LOC FRoM HOTEL WHERE HOTEL_ID = '$hotel_id'";
                $sql3 = "SELECT ACC_STAT FROM USER WHERE USER_ID = '$user_id'";
                $sql4 = "SELECT COUNT(BOOK_ID) FROM BOOKING WHERE CHECK_IN BETWEEN '$date_in' AND '$date_out' AND CHECK_OUT BETWEEN '$date_in' AND '$date_out' AND ROOM_ID = '$room_id'";
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);
                $result3 = $conn->query($sql3);
                $result4 = $conn->query($sql4);

                while($row = $result->fetch_assoc()){
                    $room_type = $row["ROOM_TYPE"];
                    $room_num = $row["ROOM_NUMBER"];
                    $room_avai = $row["ROOM_AVAI"];
                    $room_price = $row["ROOM_PRICE"];
                    $room_img = $row["ROOM_IMG"];

                    while($row_2 = $result2->fetch_assoc()){
                        $hotel_name = $row_2["HOTEL_NAME"];
                        $hotel_loc = $row_2["HOTEL_LOC"];

                        while($row_3 = $result3->fetch_assoc()){
                            $status = $row_3["ACC_STAT"];
                            
                            while($row_4 = $result4->fetch_assoc()){
                                $count = $row_4["COUNT(BOOK_ID)"];

                                //echo $count;                                
                            }
                        }
                    }
                }
                
                if($count == 0){$flag = TRUE;}else{}
                    
                
                //echo $flag;
            }else{
                die("FATAL ERROR");
            }

            $conn->close();

            //echo $status;

            if($status == 1){
                header("location: blacklist.php");
            }

            if($_SESSION["accType"] != 1){
                header("location: index.php");
            }
        ?>
        <main class="container">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo $hotel_name ?>@<?php echo $hotel_loc ?></h3>                   
                    </div>
                    <div class="card-body">
                        <div class="row text-center mb-3">
                            <div class="col-lg">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo $room_img; ?>"/> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Selected Room Details</h5>
                                        <p class="card-text">Room type: <?php echo $room_type; ?></p>
                                        <p class="card-text">Room number: <span class="badge badge-info"><?php echo $room_num; ?></span></p>
                                        <p class="card-text">Room availability: 
                                            <?php
                                                if($flag == TRUE){?>
                                                    <span class="badge badge-success">Available</span><?php
                                                }else{?>
                                                    <span class="badge badge-danger">Booked</span><?php
                                                }
                                            ?>
                                        </p>
                                        <p class="card-text">Room price: <b>RM <?php echo $room_price; ?></b> / per night</p>
                                            <?php
                                                if($flag == TRUE){?>
                                                    <a href="payment.php?room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>" class="btn btn-primary" data-toggle="tooltip" 
                                                    data-placement="right" title="By clicking Book now, you will be redirected to the payment page">Book now</a><?php
                                                }else{?>
                                                    <a href="payment.php?room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>" class="btn btn-primary disabled" data-toggle="tooltip" 
                                                    data-placement="right" title="By clicking Book now, you will be redirected to the payment page">Book now</a><?php
                                                }
                                            ?>                                        
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
    </body>
</html>
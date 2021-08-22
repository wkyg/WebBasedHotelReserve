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
            $pay_method = $_POST["payment"];
            $fname = $_POST["firstName"];
            $lname = $_POST["lastName"];
            $email = $_POST["email"];
            $con_num = $_POST["con-num"];

            $check_in = $_SESSION["datein_result"];
            $check_out = $_SESSION["dateout_result"];
            
            $days_diff_in = strtotime($check_in);
            $days_diff_out = strtotime($check_out);

            $datediff = $days_diff_out - $days_diff_in;
            $days_stay = round($datediff / (60 * 60 * 24));

            //echo $days_stay;

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM ROOM WHERE ROOM_ID = '$room_id'";
                $sql2 = "SELECT HOTEL_NAME, HOTEL_LOC FRoM HOTEL WHERE HOTEL_ID = '$hotel_id'";
                $result = $conn->query($sql);
                $result2 = $conn->query($sql2);

                while($row = $result->fetch_assoc()){
                    $room_type = $row["ROOM_TYPE"];
                    $room_num = $row["ROOM_NUMBER"];
                    $room_avai = $row["ROOM_AVAI"];
                    $room_price = $row["ROOM_PRICE"];
                    $room_img = $row["ROOM_IMG"];

                    while($row_2 = $result2->fetch_assoc()){
                        $hotel_name = $row_2["HOTEL_NAME"];
                        $hotel_loc = $row_2["HOTEL_LOC"];
                    }
                }
            }else{
                die("FATAL ERROR");
            }

            $conn->close();

            $total_price = $room_price*$days_stay;
        ?>

        
    </body>
    <main class="container">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Please enter your details</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Selected Room Details</h5>
                                    <p class="card-text">Hotel name: <b><?php echo $hotel_name ?></b></p>
                                    <p class="card-text">Room type: <b><?php echo $room_type; ?></b></p>
                                    <p class="card-text">Room number: <span class="badge badge-info"><?php echo $room_num; ?></span></p>
                                    <p class="card-text">Room availability: <span class="badge badge-success"><?php echo $room_avai; ?></span></p>
                                    <p class="card-text">Check-in date: <b><?php echo $check_in; ?></b></p>
                                    <p class="card-text">Check-out date: <b><?php echo $check_out; ?></b></p>
                                    <p class="card-text">Room price: <b>RM <?php echo $room_price; ?></b> / per night</p>
                                    <p class="card-text">Selected payment method: 
                                    <b><?php 
                                        if($pay_method == "payatcounter"){
                                            echo "Pay at front desk";
                                        }else{
                                            echo "Pay by card";
                                        }
                                    ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        if($pay_method == "payatcounter"){?>
                                            <form action="mailConfirmBook.php?room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>&pay_method=<?=$pay_method?>&check_in=<?=$check_in?>&check_out=<?=$check_out?>" method=POST>
                                                <div class="form-group">
                                                    <h3 class="card-title">Entered details</h3>
                                                    <h5 class="card-title">Full name</h5>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name" value="<?php echo $fname ?>" readonly>  
                                                        </div>
                                                        <div class="col-lg">
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last name" value="<?php echo $lname ?>" readonly>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="card-title">Email</h5>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" name="mail" placeholder="Email" value="<?php echo $email ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="card-title">Contact number</h5>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contact number" value="<?php echo $con_num ?>" readonly>
                                                </div>
                                                <h5 class="card-title">Price to be paid</h5>
                                                <p class="card-text"><b>RM <?php echo $total_price; ?></b></p>
                                                <button type="submit" id="submit" class="btn btn-primary">Confirm book</button>
                                            </form>
                                            <?php
                                        }else{?>
                                            <form action="confirmPay.php?room_num=<?=$room_num?>&room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>&pay_method=<?=$pay_method?>&check_in=<?=$check_in?>&check_out=<?=$check_out?>" method=POST>
                                                <div class="form-group">
                                                    <h3 class="card-title">Entered details</h3>
                                                    <h5 class="card-title">Full name</h5>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First name" value="<?php echo $fname ?>" readonly>  
                                                        </div>
                                                        <div class="col-lg">
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Last name" value="<?php echo $lname ?>" readonly>
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="card-title">Email</h5>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Email" name="email" value="<?php echo $email ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <h5 class="card-title">Contact number</h5>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Contact number" value="<?php echo $con_num ?>" readonly>
                                                </div>                                                
                                                <h5 class="card-title">Price to be paid</h5>
                                                <p class="card-text"><b>RM <?php echo $total_price ?></b></p>
                                                <input type="number" class="form-control hide invisible" id="formGroupExampleInput" placeholder="Contact number" name="t-price"value="<?php echo $total_price ?>" readonly>
                                                <button type="submit" id="submit" class="btn btn-primary">Confirm payment</button>
                                            </form><?php
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
</html>


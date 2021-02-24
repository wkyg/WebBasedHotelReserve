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
        <title>Payment</title>
    </head>
    <body>
        <?php 
            include_once "header.php";

            print_r($_SESSION);

            if($_SESSION["logged"] == FALSE){
                header("location: loginPage.php");
            }

            $room_id = $_GET["room_id"];
            $hotel_id = $_GET["hotel_id"];

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
                                    <p class="card-text">Room price: <b>RM <?php echo $room_price; ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <form action="checkout.php?room_id=<?=$room_id?>&hotel_id=<?=$hotel_id?>" method="POST">
                                        <div class="form-group">
                                            <h5 class="card-title">Full name</h5>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" name="firstName" id="f-name" placeholder="First name">
                                                </div>
                                                <div class="col-lg">
                                                    <input type="text" class="form-control" name="lastName" id="l-name" placeholder="Last name">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Email</h5>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Re-enter email</h5>
                                            <input type="email" class="form-control" name="re-email" id="re-email" placeholder="Re-enter email" 
                                            data-toggle="popover" title="Email does not match?" data-content="Please enter the same email as above">
                                        </div>
                                        <div class="form-group">
                                            <h5 class="card-title">Contact number</h5>
                                            <input type="text" class="form-control" name="con-num" id="con-num" placeholder="Contact number">
                                        </div>
                                        <h5 class="card-title">Payment method</h5>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" id="pay-front" value="payatcounter">
                                            <label class="form-check-label" for="pay-front">
                                                Pay at front desk
                                            </label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="radio" name="payment" id="pay-bank" value="banktrans">
                                            <label class="form-check-label" for="pay-bank">
                                                Online bank transfer
                                            </label>
                                        </div>  
                                        <h5 class="card-title">Price to be paid</h5>
                                        <p class="card-text"><b>RM <?php echo $room_price; ?></b></p>
                                        <button type="submit" id="submit" class="btn btn-primary">Pay now</button>
                                    </form>
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

        $('#email, #re-email').on('keyup', function () {
                $('#re-email').popover('disable')

                document.getElementById("submit").disabled = true

                if ($('#email').val() == $('#re-email').val()) {
                    $('#re-email').popover('hide')
                    document.getElementById("submit").disabled = false
                    
                } else if($('#email').val() != $('#re-email').val())  {
                    $('#re-email').popover('enable')
                    $('#re-email').popover('show') 
                }  
        })
    </script>
</html>


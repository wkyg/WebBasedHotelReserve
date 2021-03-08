<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/aboutStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Profile</title>
    </head>
    <body>
        <main class="container">
            <?php
                include_once "header.php";
                $book_id = $_GET["book-id"];

                //echo $book_id;

                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){
                    $sql = "SELECT * FROM HOTEL_USER_BOOK WHERE BOOK_ID = '$book_id'";
                    $result = $conn->query($sql);

                    while($row = $result->fetch_assoc()){
                        $book_idDB = $row["BOOK_ID"];
                        $room_id = $row["ROOM_ID"];
                        $hotel_name = $row["HOTEL_NAME"];
                        $hotel_loc = $row["HOTEL_LOC"];
                        $hotel_address = $row["ADDRESS"];
                        $hotel_contact = $row["CONTACT"];
                        $room_type = $row["ROOM_TYPE"];
                        $room_num = $row["ROOM_NUMBER"];
                        $room_price = $row["ROOM_PRICE"];
                        $room_img = $row["ROOM_IMG"];
                        $book_date = $row["BOOK_DATE"];
                        $check_in = $row["CHECK_IN"];
                        $check_out = $row["CHECK_OUT"];
                        $payment_meth = $row["PAYMENT_TYPE"];
                        $status = $row["STATUS"]?>

                        <div class="row mb-3">               
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-text">Booking ID: <b><?php echo $book_idDB; ?></b></p>
                                        <p class="card-text">Hotel name: <b><?php echo $hotel_name; ?></b></p>
                                        <p class="card-text">Hotel location: <b><?php echo $hotel_loc; ?></b></p>
                                        <p class="card-text">Hotel address: <b><?php echo $hotel_address; ?></b></p>
                                        <p class="card-text">Hotel contact: <b><?php echo $hotel_contact; ?></b></p>
                                        <p class="card-text">Room type: <b><?php echo $room_type; ?></b></p>
                                        <p class="card-text">Room number: <b><?php echo $room_num; ?></b></p>
                                        <p class="card-text">Room price: <b><?php echo $room_price; ?></b></p>
                                        <p class="card-text">Book date: <b><?php echo $book_date; ?></b></p>
                                        <p class="card-text">Check-in date: <b><?php echo $check_in; ?></b></p>
                                        <p class="card-text">Check-out date: <b><?php echo $check_out; ?></b></p>
                                        <p class="card-text">Payment method: <b><?php echo $payment_meth; ?></b></p>
                                        <p class="card-text">Status: <b><?php echo $status; ?></b></p>
                                        <?php
                                            if($status == "PENDING"){?>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#check-in">Check-in</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#check-out">Check-out</button><?php
                                            }else if($status == "CHECKED_IN"){?>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#check-out">Check-out</button><?php                                                
                                            }else if($status == "CHECKED_OUT"){?>
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mail">Mail customer</button><?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div><?php
                    }
                }
            ?>        
        </main>
        <!-- Modal -->
        <div class="modal fade" id="check-in" tabindex="-1" role="dialog" aria-labelledby="check-in" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Check-in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to <b>check in</b> current booking?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="manageCheckin.php?book_id=<?=$book_idDB?>" class="btn btn-success" data-toggle="tooltip" data-placement="right" 
                    title="Are you sure you want to CHECK-IN?">Check-in</a>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="check-out" tabindex="-1" role="dialog" aria-labelledby="check-out" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Check-in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to <b>check out</b> current booking?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="manageCheckout.php?book_id=<?=$book_idDB?>" class="btn btn-danger" data-toggle="tooltip" data-placement="right" 
                    title="Are you sure you want to CEHCK-OUT?">Check-out</a>
                </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="mail" tabindex="-1" role="dialog" aria-labelledby="mail" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Check-in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to <b>sent an gratitude email</b> to the user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="mailGratitude.php?book_id=<?=$book_idDB?>" class="btn btn-danger" data-toggle="tooltip" data-placement="right" 
                    title="Are you sure you want to MAIL?">Check-out</a>
                </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.php" ?>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
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
        <?php
            include_once "header.php";

            $current_user_id = $_SESSION["userID"];

            $tmp_hot_id = $_GET["hotel_id"];
            
            //echo "Hotelierrrrrrr";
        ?>
        <main class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg">
                            <h3 class="card-title text-left">Selected Hotel</h3>
                        </div>                        
                    </div>                            
                </div>
                <div class="card-body">
                    <?php                                 
                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                        if($conn){
                            $sql4 = "SELECT * FROM HOTEL WHERE HOTEL_ID = '$tmp_hot_id'";
                            $result4 = $conn->query($sql4);

                            while($row_4 = $result4->fetch_assoc()){
                                $hotel_id = $row_4["HOTEL_ID"];
                                $hotel_name = $row_4["HOTEL_NAME"];
                                $hotel_star = $row_4["HOTEL_STAR"];
                                $hotel_loc = $row_4["HOTEL_LOC"];
                                $hotel_des = $row_4["HOTEL_DES"];
                                $hotel_info = $row_4["HOTEL_INFO"];
                                $hotel_check_in = $row_4["CHECK_IN"];
                                $hotel_check_out = $row_4["CHECK_OUT"];
                                $hotel_price = $row_4["HOTEL_PRICE"];
                                $hotel_img = $row_4["HOTEL_IMG"];
                                $hotel_detail = $row_4["HOTEL_DETAIL"];
                                $hotel_address = $row_4["ADDRESS"];
                                $hotel_contact = $row_4["CONTACT"]?>

                                <div class="row mb-3">               
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">Hotel ID: <b><?php echo $hotel_id; ?></b></p>
                                                <p class="card-text">Hotel name: <b><?php echo $hotel_name; ?></b></p>
                                                <p class="card-text">Hotel star: <b><?php echo $hotel_star; ?></b></p>
                                                <p class="card-text">Hotel location: <b><?php echo $hotel_loc; ?></b></p>
                                                <p class="card-text">Hotel description: <b><?php echo $hotel_des; ?></b></p>
                                                <p class="card-text">Hotel information: <b><?php echo $hotel_info; ?></b></p>
                                                <p class="card-text">Hotel check-in time: <b><?php echo substr($hotel_check_in, 0, 5); ?></b></p>
                                                <p class="card-text">Hotel check-out time: <b><?php echo substr($hotel_check_out, 0, 5); ?></b></p>
                                                <p class="card-text">Hotel price: <b><?php echo $hotel_price; ?></b></p>
                                                <p class="card-text">Hotel detail: <b><?php echo $hotel_detail; ?></b></p>
                                                <p class="card-text">Hotel address: <b><?php echo $hotel_address; ?></b></p>
                                                <p class="card-text">Hotel contact: <b><?php echo $hotel_contact; ?></b></p>
                                                <a href="editHotel.php?hotel_id=<?=$tmp_hot_id?>" class="btn btn-success">Edit infomation</a>
                                                <a href="editHotelPhoto.php?hotel_id=<?=$tmp_hot_id?>" class="btn btn-primary">Change photo</a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                                    Delete hotel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }else{
                            die("FATAL ERROR");
                        }
                        $conn->close();
                    ?>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteHotel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteHotel">Delete hotel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this hotel?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="deleteHotelConfirm.php?hotel_id=<?=$tmp_hot_id?>" class="btn btn-danger">Delete hotel</a>
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
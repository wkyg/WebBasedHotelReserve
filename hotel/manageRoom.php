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
                        <div class="col-lg-10">
                            <h3 class="card-title text-left">Manage rooms</h3>
                        </div>               
                        <div class="col-lg">
                            <a href="addRoom.php?hotel_id=<?=$tmp_hot_id?>" class="btn btn-primary" >Add new room</a>
                        </div>         
                    </div>                            
                </div>
                <div class="card-body">
                    <?php                                 
                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                        if($conn){
                            $sql = "SELECT * FROM ROOM WHERE HOTEL_ID = '$tmp_hot_id'";
                            $result = $conn->query($sql);

                            while($row = $result->fetch_assoc()){
                                $room_id = $row["ROOM_ID"];
                                $room_type = $row["ROOM_TYPE"];
                                $room_number = $row["ROOM_NUMBER"];
                                $room_avai = $row["ROOM_AVAI"];
                                $room_price = $row["ROOM_PRICE"];?>

                                <div class="row mb-3">               
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">Room ID: <b><?php echo $room_id; ?></b></p>
                                                <p class="card-text">Room type: <b><?php echo $room_type; ?></b></p>
                                                <p class="card-text">Room number: <b><?php echo $room_number; ?></b></p>
                                                <p class="card-text">Room availability: <b><?php echo $room_avai; ?></b></p>
                                                <p class="card-text">Room price: <b><?php echo $room_price; ?></b></p>    
                                                <a href="editRoom.php?room_id=<?=$room_id?>" class="btn btn-success">Edit room</a>
                                                <a href="editRoomPhoto.php?room_id=<?=$room_id?>" class="btn btn-primary">Change photo</a>                                            
                                                <a href="deleteRoomConfirm.php?room_id=<?=$room_id?>" class="btn btn-danger" data-toggle="tooltip" data-placement="right" 
                                                title="Are you sure you want to delete?">Delete room</a>
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

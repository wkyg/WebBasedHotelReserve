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
        <title>Edit room</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            $room_id = $_GET["room_id"];

            //echo $room_id;
            
            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM ROOM WHERE ROOM_ID = '$room_id'";
                $result = $conn->query($sql);                
                
                while($row = $result->fetch_assoc()){
                    $room_type = $row["ROOM_TYPE"];
                    $room_num = $row["ROOM_NUMBER"];
                    $room_avai = $row["ROOM_AVAI"];
                    $room_price = $row["ROOM_PRICE"];
                }                
            }else{
                die("FATAL ERROR");
            }
            $conn->close();
        ?>
        <main class="container mb-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Please edit your room details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <form action="editRoomConfirm.php?room_id=<?=$room_id?>" method="POST">
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">                                                
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Room type</h5>
                                                        <?php
                                                            if($room_type == "Single"){?>
                                                                <select class="form-control" name="room-type" id="room-type" required>
                                                                    <option selected>Single</option>
                                                                    <option>Double</option>
                                                                    <option>Triple</option>
                                                                    <option>Quad</option>                                                            
                                                                </select><?php
                                                            }else if($room_type == "Double"){?>
                                                                <select class="form-control" name="room-type" id="room-type" required>
                                                                    <option>Single</option>
                                                                    <option selected>Double</option>
                                                                    <option>Triple</option>
                                                                    <option>Quad</option>                                                            
                                                                </select><?php
                                                            }else if($room_type == "Triple"){?>
                                                                <select class="form-control" name="room-type" id="room-type" required>
                                                                    <option>Single</option>
                                                                    <option>Double</option>
                                                                    <option selected>Triple</option>
                                                                    <option>Quad</option>                                                            
                                                                </select><?php
                                                            }else if($room_type == "Quad"){?>
                                                                <select class="form-control" name="room-type" id="room-type" required>
                                                                    <option>Single</option>
                                                                    <option>Double</option>
                                                                    <option>Triple</option>
                                                                    <option selected>Quad</option>                                                            
                                                                </select><?php
                                                            }else{?>
                                                                <select class="form-control" name="room-type" id="room-type" required>
                                                                    <option>Single</option>
                                                                    <option>Double</option>
                                                                    <option>Triple</option>
                                                                    <option>Quad</option>                                                            
                                                                </select><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Room number</h5>
                                                        <input type="text" class="form-control" name="room-num" id="room-num" placeholder="e.g A001, B001" value="<?php echo $room_num ?>"
                                                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p)" required>
                                                    </div>
                                                </div>                                                                                              
                                            </div>    
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Room availability</h5>
                                                        <?php
                                                            if($room_avai == "yes"){?>
                                                                <select class="form-control" name="room-avai" id="room-avai" required>
                                                                    <option selected>Available</option>
                                                                    <option>Not available</option>                                                            
                                                                </select><?php
                                                            }else if($room_avai == "no"){?>
                                                                <select class="form-control" name="room-avai" id="room-avai" required>
                                                                    <option>Available</option>
                                                                    <option selected>Not available</option>                                                            
                                                                </select><?php
                                                            }else{?>
                                                                <select class="form-control" name="room-avai" id="room-avai" required>
                                                                    <option>Available</option>
                                                                    <option>Not available</option>                                                            
                                                                </select><?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Room price</h5>
                                                        <input type="number" class="form-control" name="room-price" id="room-price" placeholder="price per night" 
                                                        value="<?php echo $room_price ?>" required>
                                                    </div>
                                                </div>                                                
                                            </div>                                                                    
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-primary">Update room</button>
                                        </div>
                                    </div>                                            
                                </form>
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
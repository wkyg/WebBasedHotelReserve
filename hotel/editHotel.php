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

            $hotel_id = $_GET["hotel_id"];
            
            //echo $hotelier_id;

            if(!isset($one)){$one = "";}
            if(!isset($two)){$two = "";}
            if(!isset($three)){$three = "";}
            if(!isset($four)){$four = "";}
            if(!isset($five)){$five = "";}
            if(!isset($six)){$six = "";}
            if(!isset($seven)){$seven = "";}
            if(!isset($eight)){$eight = "";}
            if(!isset($nine)){$nine = "";}
            if(!isset($ten)){$ten = "";}

            if(!isset($oneone)){$oneone = "";}
            if(!isset($onetwo)){$onetwo = "";}
            if(!isset($onethree)){$onethree = "";}
            if(!isset($onefour)){$onefour = "";}
            if(!isset($onefive)){$onefive = "";}
            if(!isset($onesix)){$onesix = "";}
            if(!isset($oneseven)){$oneseven = "";}
            if(!isset($oneeight)){$oneeight = "";}
            if(!isset($onenine)){$onenine = "";}
            if(!isset($onezero)){$onezero = "";}

            if(!isset($twoone)){$twoone = "";}
            if(!isset($twotwo)){$twotwo = "";}
            if(!isset($twothree)){$twothree = "";}
            if(!isset($twofour)){$twofour = "";}
            if(!isset($twofive)){$twofive = "";}
            if(!isset($twosix)){$twosix = "";}
            if(!isset($twoseven)){$twoseven = "";}
            if(!isset($twoeight)){$twoeight = "";}
            if(!isset($twonine)){$twonine = "";}
            if(!isset($twozero)){$twozero = "";}

            if(!isset($threeone)){$threeone = "";}
            if(!isset($threetwo)){$threetwo = "";}
            if(!isset($threethree)){$threethree = "";}
            if(!isset($threefour)){$threefour = "";}
            if(!isset($threefive)){$threefive = "";}
            if(!isset($threesix)){$threesix = "";}
            if(!isset($threeseven)){$threeseven = "";}
            if(!isset($threeeight)){$threeeight = "";}
            if(!isset($threenine)){$threenine = "";}
            if(!isset($threeten)){$threezero = "";}

            if(!isset($fourzero)){$fourzero = "";}
            if(!isset($fourone)){$fourone = "";}
            if(!isset($fourtwo)){$fourtwo = "";}

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM HOTEL WHERE HOTEL_ID = '$hotel_id'";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    $hotel_name = $row["HOTEL_NAME"];
                    $hotel_star = $row["HOTEL_STAR"];
                    $hotel_loc = $row["HOTEL_LOC"];
                    $hotel_des = $row["HOTEL_DES"];
                    $hotel_info = $row["HOTEL_INFO"];
                    $check_in = $row["CHECK_IN"];
                    $check_out = $row["CHECK_OUT"];
                    $hotel_price = $row["HOTEL_PRICE"];
                    $hotel_detail = $row["HOTEL_DETAIL"];
                    $hotel_address = $row["ADDRESS"];
                    $hotel_contact = $row["CONTACT"];
                }

                $sql2 = "SELECT * FROM HOTEL_AMENITIES WHERE HOTEL_ID = '$hotel_id'";
                $result2 = $conn->query($sql2);

                while($row_2 = $result2->fetch_assoc()){
                    $amen_id = $row_2["AMENITIES_ID"];

                    //echo $amen_id."</br>";

                    if($amen_id == 1){$one = TRUE;}
                    if($amen_id == 2){$two = TRUE;}
                    if($amen_id == 3){$three = TRUE;}
                    if($amen_id == 4){$four = TRUE;}
                    if($amen_id == 5){$five = TRUE;}
                    if($amen_id == 6){$six = TRUE;}
                    if($amen_id == 7){$seven = TRUE;}
                    if($amen_id == 8){$eight = TRUE;}
                    if($amen_id == 9){$nine = TRUE;}
                    if($amen_id == 10){$onezero = TRUE;}

                    if($amen_id == 11){$oneone = TRUE;}
                    if($amen_id == 12){$onetwo = TRUE;}
                    if($amen_id == 13){$onethree = TRUE;}
                    if($amen_id == 14){$onefour = TRUE;}
                    if($amen_id == 15){$onefive = TRUE;}
                    if($amen_id == 16){$onesix = TRUE;}
                    if($amen_id == 17){$oneseven = TRUE;}
                    if($amen_id == 18){$oneeight = TRUE;}
                    if($amen_id == 19){$onenine = TRUE;}
                    if($amen_id == 20){$twozero = TRUE;}

                    if($amen_id == 21){$twoone = TRUE;}
                    if($amen_id == 22){$twotwo = TRUE;}
                    if($amen_id == 23){$twothree = TRUE;}
                    if($amen_id == 24){$twofour = TRUE;}
                    if($amen_id == 25){$twofive = TRUE;}
                    if($amen_id == 26){$twosix = TRUE;}
                    if($amen_id == 27){$twoseven = TRUE;}
                    if($amen_id == 28){$twoeight = TRUE;}
                    if($amen_id == 29){$twonine = TRUE;}
                    if($amen_id == 30){$threezero = TRUE;}

                    if($amen_id == 31){$threeone = TRUE;}
                    if($amen_id == 32){$threetwo = TRUE;}
                    if($amen_id == 33){$threethree = TRUE;}
                    if($amen_id == 34){$threefour = TRUE;}
                    if($amen_id == 35){$threefive = TRUE;}
                    if($amen_id == 36){$threesix = TRUE;}
                    if($amen_id == 37){$threeseven = TRUE;}
                    if($amen_id == 38){$threeeight = TRUE;}
                    if($amen_id == 39){$threenine = TRUE;}
                    if($amen_id == 40){$fourzero = TRUE;}

                    if($amen_id == 41){$fourone = TRUE;}
                    if($amen_id == 42){$fourtwo = TRUE;}                                        
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
                        <h3 class="card-title">Please edit your hotel details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <form action="updateHotel.php?hotel_id=<?=$hotel_id?>" method="POST" enctype="multipart/form-data">
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel name</h5>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="e.g MyHotel, iHotel" 
                                                        value="<?php echo $hotel_name?>"required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel star rating</h5>
                                                        <?php
                                                            if($hotel_star == 1){?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option selected>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select><?php
                                                            }else if($hotel_star == 2){?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option>1</option>
                                                                    <option selected>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select><?php
                                                            }else if($hotel_star == 3){?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option selected>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select><?php
                                                            }else if($hotel_star == 4){?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option selected>4</option>
                                                                    <option>5</option>
                                                                </select><?php
                                                            }else if($hotel_star == 5){?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option selected>5</option>
                                                                </select><?php
                                                            }else{?>
                                                                <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select><?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel location</h5>
                                                        <input type="text" class="form-control" name="location" id="location" 
                                                        placeholder="e.g Kuala Lumpur, Penang, Melacca" value="<?php echo $hotel_loc; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel description</h5>
                                                        <input type="text" class="form-control" name="des" id="des" 
                                                        placeholder="e.g luxurious, good cleaniness..." value="<?php echo $hotel_des ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel info</h5>
                                                        <input type="text" class="form-control" name="info" id="info" 
                                                        placeholder="e.g background of the hotel, history of the hotel" value="<?php echo $hotel_info ?>" size="200" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-in time</h5>
                                                        <input type="text" class="form-control" name="check-in" id="check-in" 
                                                        placeholder="Check-in time of your hotel" onfocus="(this.type='time')" onblur="(this.type='text')" 
                                                        value="<?php echo substr($check_in, 0, 5) ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-out time</h5>
                                                        <input type="text" class="form-control" name="check-out" id="check-out" 
                                                        placeholder="Check-out time of your hotel" onfocus="(this.type='time')" onblur="(this.type='text')" 
                                                        value="<?php echo substr($check_out, 0, 5) ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel price</h5>
                                                        <input type="number" class="form-control" name="price" id="price" placeholder="Lowest or average" 
                                                        value="<?php echo $hotel_price ?>" required>
                                                    </div>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <h5 class="card-title">Hotel detail</h5>
                                                <input type="text" class="form-control" name="detail" id="detail" 
                                                placeholder="Detail of your hotel e.g sector that you are proud of, speciality of your hotel" 
                                                value="<?php echo $hotel_detail ?>" size="200" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel address</h5>
                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Address of your hotel" 
                                                        value="<?php echo $hotel_address ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel contact</h5>
                                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact of your hotel" 
                                                        value="<?php echo $hotel_contact ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">Amenities</h5>
                                            <div class="row mb-3">
                                                <!--HOTEL FACILITIES-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Hotel facilities</b></h6>
                                                    <div class="form-check">
                                                        <?php  
                                                            if($one == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="1" id="wifi" checked>
                                                                <label class="form-check-label" for="wifi">
                                                                    WiFi
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="1" id="wifi">
                                                                <label class="form-check-label" for="wifi">
                                                                    WiFi
                                                                </label><?php
                                                            }
                                                        ?>
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onefive == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="15" id="wash-machine" checked>
                                                                <label class="form-check-label" for="wash-machine">
                                                                    Washing machine
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="15" id="wash-machine">
                                                                <label class="form-check-label" for="wash-machine">
                                                                    Washing machine
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onefour == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="14" id="room-service" checked>
                                                                <label class="form-check-label" for="room-service">
                                                                    Room service
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="14" id="room-service">
                                                                <label class="form-check-label" for="room-service">
                                                                    Room service
                                                                </label><?php                                                                
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onethree == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="13" id="outdoor-swim" checked>
                                                                <label class="form-check-label" for="outdoor-swim">
                                                                    Outdoor swimming pool
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="13" id="outdoor-swim">
                                                                <label class="form-check-label" for="outdoor-swim">
                                                                    Outdoor swimming pool
                                                                </label><?php
                                                            }
                                                        ?>                                                       
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onetwo == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="12" id="no-smoking" checked>
                                                                <label class="form-check-label" for="no-smoking">
                                                                    Non-smoking rooms
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="12" id="no-smoking">
                                                                <label class="form-check-label" for="no-smoking">
                                                                    Non-smoking rooms
                                                                </label><?php
                                                            }
                                                        ?>
                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onezero == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="10" id="bar" checked>
                                                                <label class="form-check-label" for="bar">
                                                                    Hotel bar
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="10" id="bar">
                                                                <label class="form-check-label" for="bar">
                                                                    Hotel bar
                                                                </label><?php
                                                            }
                                                        ?>
                                                       
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($nine == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="9" id="gym" checked>
                                                                <label class="form-check-label" for="gym">
                                                                    Gym
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="9" id="gym">
                                                                <label class="form-check-label" for="gym">
                                                                    Gym
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($eight == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="8" id="free-wifi-lobby" checked>
                                                                <label class="form-check-label" for="free-wifi-lobby">
                                                                    Free WiFi in lobby
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="8" id="free-wifi-lobby">
                                                                <label class="form-check-label" for="free-wifi-lobby">
                                                                    Free WiFi in lobby
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($seven == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="7" id="com-internet" checked>
                                                                <label class="form-check-label" for="com-internet">
                                                                    Computer with internet
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="7" id="com-internet">
                                                                <label class="form-check-label" for="com-internet">
                                                                    Computer with internet
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($six == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="6" id="elevator" checked>
                                                                <label class="form-check-label" for="elevator">
                                                                    Elevator
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="6" id="elevator">
                                                                <label class="form-check-label" for="elevator">
                                                                    Elevator
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($five == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="5" id="bell-service" checked>
                                                                <label class="form-check-label" for="bell-service">
                                                                    Bell service
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="5" id="bell-service">
                                                                <label class="form-check-label" for="bell-service">
                                                                    Bell service
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($four == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="4" id="air-shuttle" checked>
                                                                <label class="form-check-label" for="air-shuttle">
                                                                    Airport shuttle
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="4" id="air-shuttle">
                                                                <label class="form-check-label" for="air-shuttle">
                                                                    Airport shuttle
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($three == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="3" id="24-room-svc" checked>
                                                                <label class="form-check-label" for="24-room-svc">
                                                                    24-hour room service
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="3" id="24-room-svc">
                                                                <label class="form-check-label" for="24-room-svc">
                                                                    24-hour room service
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($two == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="2" id="24-rcp" checked>
                                                                <label class="form-check-label" for="24-rcp">
                                                                    24-hour reception
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="2" id="24-rcp">
                                                                <label class="form-check-label" for="24-rcp">
                                                                    24-hour reception
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threefour == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="34" id="swim" checked>
                                                                <label class="form-check-label" for="swim">
                                                                    Swimming pool
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="34" id="swim">
                                                                <label class="form-check-label" for="swim">
                                                                    Swimming pool
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                                <!--ROOM FACILITIES-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Room facilities</b></h6>
                                                    <div class="form-check">
                                                        <?php
                                                            if($oneone == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="11" id="laundry" checked>
                                                                <label class="form-check-label" for="laundry">
                                                                    Laundry
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="11" id="laundry">
                                                                <label class="form-check-label" for="laundry">
                                                                    Laundry
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twoeight == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="28" id="tv" checked>
                                                                <label class="form-check-label" for="tv">
                                                                    Television
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="28" id="tv">
                                                                <label class="form-check-label" for="tv">
                                                                    Television
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twoseven == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="27" id="telephone" checked>
                                                                <label class="form-check-label" for="telephone">
                                                                    Telephone
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="27" id="telephone">
                                                                <label class="form-check-label" for="telephone">
                                                                    Telephone
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twosix == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="26" id="room-safe" checked>
                                                                <label class="form-check-label" for="room-safe">
                                                                    Room safe
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="26" id="room-safe">
                                                                <label class="form-check-label" for="room-safe">
                                                                    Room safe
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twofive == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="25" id="iron-board" checked>
                                                                <label class="form-check-label" for="iron-board">
                                                                    Ironing board
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="25" id="iron-board">
                                                                <label class="form-check-label" for="iron-board">
                                                                    Ironing board
                                                                </label><?php
                                                            }
                                                        ?>                                                       
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twofour == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="24" id="cos-mirror" checked>
                                                                <label class="form-check-label" for="cos-mirror">
                                                                    Cosmetic mirror
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="24" id="cos-mirror">
                                                                <label class="form-check-label" for="cos-mirror">
                                                                    Cosmetic mirror
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twothree == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="23" id="free-wifi-room" checked>
                                                                <label class="form-check-label" for="free-wifi-room">
                                                                    Free WiFi in rooms
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="23" id="free-wifi-room">
                                                                <label class="form-check-label" for="free-wifi-room">
                                                                    Free WiFi in rooms
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twotwo == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="22" id="kettle" checked>
                                                                <label class="form-check-label" for="kettle">
                                                                    Electric kettle
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="22" id="kettle">
                                                                <label class="form-check-label" for="kettle">
                                                                    Electric kettle
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twoone == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="21" id="desk" checked>
                                                                <label class="form-check-label" for="desk">
                                                                    Desk
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="21" id="desk">
                                                                <label class="form-check-label" for="desk">
                                                                    Desk
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twozero == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="20" id="cable-tv" checked>
                                                                <label class="form-check-label" for="cable-tv">
                                                                    Cable TV
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="20" id="cable-tv">
                                                                <label class="form-check-label" for="cable-tv">
                                                                    Cable TV
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onenine == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="19" id="hairdryer" checked>
                                                                <label class="form-check-label" for="hairdryer">
                                                                    Hairdryer
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="19" id="hairdryer">
                                                                <label class="form-check-label" for="hairdryer">
                                                                    Hairdryer
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($oneeight == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="18" id="bath-shower" checked>
                                                                <label class="form-check-label" for="bath-shower">
                                                                    Bathroom with shower
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="18" id="bath-shower">
                                                                <label class="form-check-label" for="bath-shower">
                                                                    Bathroom with shower
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($oneseven == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="17" id="bath-tub" checked>
                                                                <label class="form-check-label" for="bath-tub">
                                                                    Bathroom with bathtub
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="17" id="bath-tub">
                                                                <label class="form-check-label" for="bath-tub">
                                                                    Bathroom with bathtub
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($onesix == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="16" id="aircon" checked>
                                                                <label class="form-check-label" for="aircon">
                                                                    Air conditioning
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="16" id="aircon">
                                                                <label class="form-check-label" for="aircon">
                                                                    Air conditioning
                                                                </label><?php
                                                            }
                                                        ?>                                                       
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($fourtwo == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="42" id="fridge" checked>
                                                                <label class="form-check-label" for="fridge">
                                                                    Fridge
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="42" id="fridge">
                                                                <label class="form-check-label" for="fridge">
                                                                    Fridge
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                                <!--WELLNESS-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Wellness</b></h6>
                                                    <div class="form-check">
                                                        <?php
                                                            if($twonine == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="29" id="massage" checked>
                                                                <label class="form-check-label" for="massage">
                                                                    Massage
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="29" id="massage">
                                                                <label class="form-check-label" for="massage">
                                                                    Massage
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threefive == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="35" id="sauna" checked>
                                                                <label class="form-check-label" for="sauna">
                                                                    Sauna
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="35" id="sauna">
                                                                <label class="form-check-label" for="sauna">
                                                                    Sauna
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threesix == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="36" id="steam-room" checked>
                                                                <label class="form-check-label" for="steam-room">
                                                                    Steam room
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="36" id="steam-room">
                                                                <label class="form-check-label" for="steam-room">
                                                                    Steam room
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threeseven == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="37" id="body-treat" checked>
                                                                <label class="form-check-label" for="body-treat">
                                                                    Body treatment
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="37" id="body-treat">
                                                                <label class="form-check-label" for="body-treat">
                                                                    Body treatment
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threeeight == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="38" id="beauty" checked>
                                                                <label class="form-check-label" for="beauty">
                                                                    Beauty saloon
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="38" id="beauty">
                                                                <label class="form-check-label" for="beauty">
                                                                    Beauty saloon
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                                <!--ACCESSIBILITY-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Accessibility</b></h6>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threezero == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="30" id="access-parking" checked>
                                                                <label class="form-check-label" for="access-parking">
                                                                    Accessible parking
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="30" id="access-parking">
                                                                <label class="form-check-label" for="access-parking">
                                                                    Accessible parking
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threeone == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="31" id="free-parking" checked>
                                                                <label class="form-check-label" for="free-parking">
                                                                    Free parking
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="31" id="free-parking">
                                                                <label class="form-check-label" for="free-parking">
                                                                    Free parking
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threetwo == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="32" id="wheelchair" checked>
                                                                <label class="form-check-label" for="wheelchair">
                                                                    Wheelchair accessible
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="32" id="wheelchair">
                                                                <label class="form-check-label" for="wheelchair">
                                                                    Wheelchair accessible
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                                <!--CHILDREN-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Children</b></h6>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threethree == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="33" id="crib" checked>
                                                                <label class="form-check-label" for="crib">
                                                                    Baby crib
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="33" id="crib">
                                                                <label class="form-check-label" for="crib">
                                                                    Baby crib
                                                                </label><?php
                                                            }
                                                        ?>                                                                                                              
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($threenine == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="39" id="playground" checked>
                                                                <label class="form-check-label" for="playground">
                                                                    Playground
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="39" id="playground">
                                                                <label class="form-check-label" for="playground">
                                                                    Playground
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($fourzero == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="40" id="childcare" checked>
                                                                <label class="form-check-label" for="childcare">
                                                                    Childcare
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="40" id="childcare">
                                                                <label class="form-check-label" for="childcare">
                                                                    Childcare
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <?php
                                                            if($fourone == TRUE){?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="41" id="kid-club" checked>
                                                                <label class="form-check-label" for="kid-club">
                                                                    Kids' club
                                                                </label><?php
                                                            }else{?>
                                                                <input class="form-check-input" type="checkbox" name="amen[]" value="41" id="kid-club">
                                                                <label class="form-check-label" for="kid-club">
                                                                    Kids' club
                                                                </label><?php
                                                            }
                                                        ?>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-primary">Update info</button>
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
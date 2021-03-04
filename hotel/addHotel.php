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

            $hotelier_id = $_GET["hotelier_id"];
            
            //echo $hotelier_id;
        ?>
        <main class="container mb-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Please enter your hotel details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <form action="addHotelConfirm.php?hotelier_id=<?=$hotelier_id?>" method="POST" enctype="multipart/form-data">
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel name</h5>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="e.g MyHotel, iHotel" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel star rating</h5>
                                                        <select class="form-control" name="hotel-star" id="hotel-star" required>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel location</h5>
                                                        <input type="text" class="form-control" name="location" id="location" placeholder="e.g Kuala Lumpur, Penang, Melacca" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel description</h5>
                                                        <input type="text" class="form-control" name="des" id="des" placeholder="e.g luxurious, good cleaniness..." required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel info</h5>
                                                        <input type="text" class="form-control" name="info" id="info" placeholder="e.g background of the hotel, history of the hotel" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-in time</h5>
                                                        <input type="text" class="form-control" name="check-in" id="check-in" placeholder="Check-in time of your hotel" 
                                                        onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel check-out time</h5>
                                                        <input type="text" class="form-control" name="check-out" id="check-out" placeholder="Check-out time of your hotel" 
                                                        onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel price</h5>
                                                        <input type="number" class="form-control" name="price" id="price" placeholder="Lowest or average" required>
                                                    </div>
                                                </div>
                                            </div>                                    
                                        </div>
                                    </div>
                                    <div class="card mb-3 bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Main hotel image</h5>
                                                        <input type="file" class="form-control-file" name="main-img" id="main-img" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-1" id="hotel-img-1" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-2" id="hotel-img-1" required>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-3" id="hotel-img-1" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-4" id="hotel-img-1" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Supporting hotel image</h5>
                                                        <input type="file" class="form-control-file" name="hotel-img-5" id="hotel-img-1" required>
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
                                                placeholder="Detail of your hotel e.g sector that you are proud of, speciality of your hotel" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel address</h5>
                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Address of your hotel" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <h5 class="card-title">Hotel contact</h5>
                                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact of your hotel" required>
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
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="1" id="wifi">
                                                        <label class="form-check-label" for="wifi">
                                                            WiFi
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="15" id="wash-machine">
                                                        <label class="form-check-label" for="wash-machine">
                                                            Washing machine
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="14" id="room-service">
                                                        <label class="form-check-label" for="room-service">
                                                            Room service
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="13" id="outdoor-swim">
                                                        <label class="form-check-label" for="outdoor-swim">
                                                            Outdoor swimming pool
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="12" id="no-smoking">
                                                        <label class="form-check-label" for="no-smoking">
                                                            Non-smoking rooms
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="10" id="bar">
                                                        <label class="form-check-label" for="bar">
                                                            Hotel bar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="9" id="gym">
                                                        <label class="form-check-label" for="gym">
                                                            Gym
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="8" id="free-wifi-lobby">
                                                        <label class="form-check-label" for="free-wifi-lobby">
                                                            Free WiFi in lobby
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="7" id="com-internet">
                                                        <label class="form-check-label" for="com-internet">
                                                            Computer with internet
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="6" id="elevator">
                                                        <label class="form-check-label" for="elevator">
                                                            Elevator
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="5" id="bell-service">
                                                        <label class="form-check-label" for="bell-service">
                                                            Bell service
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="4" id="air-shuttle">
                                                        <label class="form-check-label" for="air-shuttle">
                                                            Airport shuttle
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="3" id="24-room-svc">
                                                        <label class="form-check-label" for="24-room-svc">
                                                            24-hour room service
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="2" id="24-rcp">
                                                        <label class="form-check-label" for="24-rcp">
                                                            24-hour reception
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="34" id="swim">
                                                        <label class="form-check-label" for="swim">
                                                            Swimming pool
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--ROOM FACILITIES-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Room facilities</b></h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="11" id="laundry">
                                                        <label class="form-check-label" for="laundry">
                                                            Laundry
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="28" id="tv">
                                                        <label class="form-check-label" for="tv">
                                                            Television
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="27" id="telephone">
                                                        <label class="form-check-label" for="telephone">
                                                            Telephone
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="26" id="room-safe">
                                                        <label class="form-check-label" for="room-safe">
                                                            Room safe
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="25" id="iron-board">
                                                        <label class="form-check-label" for="iron-board">
                                                            Ironing board
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="24" id="cos-mirror">
                                                        <label class="form-check-label" for="cos-mirror">
                                                            Cosmetic mirror
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="23" id="free-wifi-room">
                                                        <label class="form-check-label" for="free-wifi-room">
                                                            Free WiFi in rooms
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="22" id="kettle">
                                                        <label class="form-check-label" for="kettle">
                                                            Electric kettle
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="21" id="desk">
                                                        <label class="form-check-label" for="desk">
                                                            Desk
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="20" id="cable-tv">
                                                        <label class="form-check-label" for="cable-tv">
                                                            Cable TV
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="19" id="hairdryer">
                                                        <label class="form-check-label" for="hairdryer">
                                                            Hairdryer
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="18" id="bath-shower">
                                                        <label class="form-check-label" for="bath-shower">
                                                            Bathroom with shower
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="17" id="bath-tub">
                                                        <label class="form-check-label" for="bath-tub">
                                                            Bathroom with bathtub
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="16" id="aircon">
                                                        <label class="form-check-label" for="aircon">
                                                            Air conditioning
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="42" id="fridge">
                                                        <label class="form-check-label" for="fridge">
                                                            Fridge
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--WELLNESS-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Wellness</b></h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="29" id="massage">
                                                        <label class="form-check-label" for="massage">
                                                            Massage
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="35" id="sauna">
                                                        <label class="form-check-label" for="sauna">
                                                            Sauna
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="36" id="steam-room">
                                                        <label class="form-check-label" for="steam-room">
                                                            Steam room
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="37" id="body-treat">
                                                        <label class="form-check-label" for="body-treat">
                                                            Body treatment
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="38" id="beauty">
                                                        <label class="form-check-label" for="beauty">
                                                            Beauty saloon
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--ACCESSIBILITY-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Accessibility</b></h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="30" id="access-parking">
                                                        <label class="form-check-label" for="access-parking">
                                                            Accessible parking
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="31" id="free-parking">
                                                        <label class="form-check-label" for="free-parking">
                                                            Free parking
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="32" id="wheelchair">
                                                        <label class="form-check-label" for="wheelchair">
                                                            Wheelchair accessible
                                                        </label>
                                                    </div>
                                                </div>
                                                <!--CHILDREN-->
                                                <div class="col-lg">
                                                    <h6 class="card-title"><b>Children</b></h6>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="33" id="crib">
                                                        <label class="form-check-label" for="crib">
                                                            Baby crib
                                                        </label>                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="39" id="playground">
                                                        <label class="form-check-label" for="playground">
                                                            Playground
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="40" id="childcare">
                                                        <label class="form-check-label" for="childcare">
                                                            Childcare
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="amen[]" value="41" id="kid-club">
                                                        <label class="form-check-label" for="kid-club">
                                                            Kids' club
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <button type="submit" class="btn btn-primary">Add hotel</button>
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
<?php
    session_start();
    $search = $_SESSION["search_result"];
    $datein = $_SESSION["datein_result"];
    $dateout = $_SESSION["dateout_result"];
    $adults = $_SESSION["adults_result"];
    $children = $_SESSION["children_result"];
    $room = $_SESSION["room_result"];
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/resultStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Hotel Reservation</title>
    </head>
    <body>
        <header class="container">
            <div class="container">
                <!--Navigation-->
                <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" width="100" height="100"alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.html">Login <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.html">Register</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MYR
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">SGD</a>
                                    <a class="dropdown-item" href="#">THB</a>
                                    <a class="dropdown-item" href="#">USD</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main class="container text-center">
            <div class="container">
                <!--Form box-->
                <!--Search box-->
                <div class="row">
                    <!--
                    <div class="col-sm bg-transparent">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="searchForm" placeholder="Location">
                        </div>
                    </div>-->
                    <div class="col-sm">
                        <div class="form-group">
                            <form action="search.php" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg rounded-0" name="search" id="searchForm" placeholder="Location">
                                    <input type="text" class="form-control form-control-lg rounded-0" name="datein" placeholder="Date-in" onfocus="(this.type='date')" onblur="(this.type='text')">
                                    <input type="text" class="form-control form-control-lg rounded-0" name="dateout" placeholder="Date-out" onfocus="(this.type='date')" onblur="(this.type='text')">
                                    <button class="btn btn-light dropdown-toggle rounded-0 rounded-0" type="button" data-toggle="dropdown" aria-expanded="false">More option</button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-control-lg" name="adults" placeholder="Adults" id="stepper_0" name="adults" step="1" min="0">
                                                    </div>                                                    
                                                </div>
                                                <div class="form-group">                                                 
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-control-lg" name="children" placeholder="Children" id="stepper_1" name="children" step="1" min="0">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-control-lg" name="room" placeholder="Room" id="stepper_2" name="room" step="1" min="0">     
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <div class="col-sm">
                                                <h5>Personality & Mood</h5>
                                            </div>
                                            <div class="col-sm pb-3">
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                            </div>
                                            <div class="col-sm pb-3">
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                            </div>
                                            <div class="col-sm">
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="submit" class="btn btn-light btn-lg rounded-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php   
                /*----DEBUG OUTPUTS---*/
                /*
                echo $search."</br>";
                echo $datein."</br>";
                echo $dateout."</br>";
                echo $adults."</br>";
                echo $children."</br>";
                echo $room."</br>";
                */
                //$img = 'IMG_';
                $conn = mysqli_connect("localhost", "root", "", "hotel");
            
                if($conn){
                    $sql_2 = "SELECT * FROM HOTEL WHERE HOTEL_NAME LIKE '%$search%' OR HOTEL_LOC LIKE '%$search%'";
                    $result_2 = $conn->query($sql_2);
                    while($row = $result_2->fetch_assoc()){
                        $name = $row['HOTEL_NAME'];
                        $location = $row['HOTEL_LOC'];
                        $img = $row['HOTEL_IMG'];
                        $desc = $row['HOTEL_DES'];
                        $price = $row['HOTEL_PRICE'];
                        $id = $row['HOTEL_ID'];?>
                        <div class="container">
                            <div class="card mb-3">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>" />
                                <div class="card-body text-left">
                                    <h3 class="card-title"><?php echo $name; ?></h3>
                                    <p class="card-text"><?php echo $location; ?></p>
                                    <p class="card-text"><?php echo $desc; ?></p>
                                    <a href="hoteldetail.php?hotel_id=<?=$id?>" class="btn btn-primary">More details</a>
                                </div>
                                <div class="card-body text-right">
                                    <h3 class="card-title"><?php echo 'RM '.$price; ?></h3>
                                </div>
                            </div>
                        </div><?php
                    }
                }else{
                    die("FATAL ERROR");
                }
               
                $conn->close();
            ?>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
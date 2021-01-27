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
        <link rel="stylesheet" type=text/css href="css/hoteldetailStyle.css">
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
        <main class="container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg">
                        <div class="jumbotron bg-light">
                            <h6 class="lead">Your satisfaction, our motivation</h6>        
                        </div>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <?php
                        $hotel_detail_id = $_GET["hotel_id"];
                        $conn = mysqli_connect("localhost", "root", "", "hotel");
                    
                        if($conn){
                            $sql = "SELECT * FROM HOTEL_IMG WHERE HOTEL_ID = '$hotel_detail_id'";
                            $sql2 = "SELECT HOTEL_NAME, HOTEL_DES FROM HOTEL WHERE HOTEL_ID = '$hotel_detail_id'";
                            $result = $conn->query($sql);
                            $result2 = $conn->query($sql2);
                            while($row = $result->fetch_assoc()){
                                $img_1 = $row['IMG_1'];
                                $img_2 = $row['IMG_2'];
                                $img_3 = $row['IMG_3'];
                                $img_4 = $row['IMG_4'];
                                $img_5 = $row['IMG_5'];
                                    while($row_2 = $result2->fetch_assoc()){
                                        $hotel_name = $row_2['HOTEL_NAME'];
                                        $hotel_des = $row_2['HOTEL_DES'];    
                                    }?>    
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_1); ?>" height=auto alt="img_1" />
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5><?php echo $hotel_name ?></h5>
                                                <p><?php echo $hotel_des ?></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_2); ?>" height=auto alt="img_2" />
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_3); ?>" height=auto alt="img_3" />    
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_4); ?>" height=auto alt="img_4" />    
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_5); ?>" height=auto alt="img_5" />    
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                <?php
                            }
                        }else{
                            die("FATAL ERROR");
                        }
                        $conn->close();
                    ?>
                </div>
            </div>
            <div class="container mt-3 mb-3">
                <?php 
                    $land = "landmark_";
                    $conn = mysqli_connect("localhost", "root", "", "hotel");
                    if($conn){
                        $sql = "SELECT HOTEL_NAME, HOTEL_DETAIL, HOTEL_LOC, HOTEL_IMG FROM HOTEL WHERE HOTEL_ID = '$hotel_detail_id'";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            $hot_name = $row["HOTEL_NAME"];
                            $detail = $row["HOTEL_DETAIL"];
                            $location = $row["HOTEL_LOC"];
                            $small_img = $row["HOTEL_IMG"];
                            $sql2 = "SELECT * FROM LANDMARKS WHERE LAND_LOCATION = '$location'";
                            $result2 = $conn->query($sql2);
                            while($row2 = $result2->fetch_assoc()){
                                $landmark_1 = $row2["LANDMARK_1"];$landmark_2 = $row2["LANDMARK_2"];
                                $landmark_3 = $row2["LANDMARK_3"];$landmark_4 = $row2["LANDMARK_4"];
                                $landmark_5 = $row2["LANDMARK_5"];$landmark_6 = $row2["LANDMARK_6"];
                                $landmark_7 = $row2["LANDMARK_7"];$landmark_8 = $row2["LANDMARK_8"];
                                $landmark_9 = $row2["LANDMARK_9"];$landmark_10 = $row2["LANDMARK_10"];
                            }?>
                            <ul class="nav justify-content-center nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link text-white active" id="pills-home-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-profile" aria-selected="false">Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-rooms" role="tab" aria-controls="pills-contact" aria-selected="false">Rooms</a>
                                </li>
                            </ul>
                            <div class="tab-content rounded" id="pills-tabContent">
                                <div class="tab-pane fade active" id="pills-overview" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="card">
                                                        <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($small_img); ?>" height=auto alt="small_img" />   
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg">
                                                    <div class="card">
                                                        Ozone
                                                    </div>                                                
                                                </div>
                                                <div class="col-lg">
                                                    <div class="card">
                                                        Book now
                                                    </div>                                               
                                                </div>
                                            </div?>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-profile-tab">2</div>
                                <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
                                <div class="tab-pane fade" id="pills-rooms" role="tabpanel" aria-labelledby="pills-contact-tab">4</div>
                            </div><?php   
                        }
                    }else{
                        die("FATAL ERROR");
                    }
                    $conn->close();
                ?>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
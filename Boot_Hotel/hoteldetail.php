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
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()){
                            $img_1 = $row['IMG_1'];
                            $img_2 = $row['IMG_2'];
                            $img_3 = $row['IMG_3'];
                            $img_4 = $row['IMG_4'];
                            $img_5 = $row['IMG_5'];?>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img_1); ?>" height=auto alt="img_1" />
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>My Caption Title (1st Image)</h5>
                                            <p>The whole caption will only show up if the screen is at least medium size.</p>
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
                <?php
                    echo $_GET["hotel_id"];
                ?>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
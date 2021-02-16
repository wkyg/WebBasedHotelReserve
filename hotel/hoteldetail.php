<!doctype html>
<?php
    $hotel_detail_id = $_GET["hotel_id"];
    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT * FROM HOTEL_IMG WHERE HOTEL_ID = '$hotel_detail_id'";
        $sql2 = "SELECT HOTEL_NAME, HOTEL_DES, HOTEL_DETAIL, HOTEL_INFO, HOTEL_LOC, HOTEL_STAR FROM HOTEL WHERE HOTEL_ID = '$hotel_detail_id'";
        $sql3 = "SELECT COMMENT_ID, COMMENT_CONTENT FROM COMMENT WHERE HOTEL_ID = '$hotel_detail_id'";
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
        while($row = $result->fetch_assoc()){
            $img_1 = $row['IMG_1'];
            $img_2 = $row['IMG_2'];
            $img_3 = $row['IMG_3'];
            $img_4 = $row['IMG_4'];
            $img_5 = $row['IMG_5'];
        }
        while($row_2 = $result2->fetch_assoc()){
            $hotel_name = $row_2['HOTEL_NAME'];
            $hotel_des = $row_2['HOTEL_DES'];   
            $detail = $row_2["HOTEL_DETAIL"];
            $info = $row_2["HOTEL_INFO"];
            $location = $row_2["HOTEL_LOC"];
            $hotel_star = $row_2["HOTEL_STAR"]; 

            $sql4 = "SELECT * FROM LANDMARKS WHERE LAND_LOCATION = '$location'";
            $result4 = $conn->query($sql4);
            while($row_4 = $result4->fetch_assoc()){
                $landmark_1 = $row_4["LANDMARK_1"];$landmark_2 = $row_4["LANDMARK_2"];
                $landmark_3 = $row_4["LANDMARK_3"];$landmark_4 = $row_4["LANDMARK_4"];
                $landmark_5 = $row_4["LANDMARK_5"];$landmark_6 = $row_4["LANDMARK_6"];
                $landmark_7 = $row_4["LANDMARK_7"];$landmark_8 = $row_4["LANDMARK_8"];
                $landmark_9 = $row_4["LANDMARK_9"];$landmark_10 = $row_4["LANDMARK_10"];
            }
        }
        while($row_3 = $result3->fetch_assoc()){
            $comment = $row_3["COMMENT_CONTENT"];
            $id = $row_3["COMMENT_ID"];
            $arr = array($id => $comment);
            //echo $comment;

        }
    }else{
        die("FATAL ERROR");
    }
    $conn->close();
?>
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
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
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
                </div>
            </div>
            <div class="container mt-3 mb-3">
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
                    <div class="tab-pane active" id="pills-overview" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card">
                            <div class="card-header">
                                <h2><?php echo $hotel_name; ?>@<?php echo $location ?></h2>
                                    <h6><?php 
                                        for($i=0; $i<$hotel_star; $i++){
                                            ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                </svg>
                                            <?php
                                        }
                                    ?></h6>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Hotel Description</h3>
                                <?php echo $detail; ?>
                                <h3 class="card-title mt-5">Guest reviews</h3>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="#">View all</a></h6>
                                <div class="row">
                                    <?php
                                        $hotel_detail_id = $_GET["hotel_id"];
                                        //echo $hotel_detail_id;
                                        $conn = mysqli_connect("localhost", "root", "", "hotel");
                                    
                                        if($conn){
                                            $sql3 = "SELECT * FROM USER_COMMENT_RATING_HOTEL_VIEW WHERE HOTEL_ID = '$hotel_detail_id' LIMIT 3";
                                            $result3 = $conn->query($sql3);

                                            while($row_3 = $result3->fetch_assoc()){
                                                $user_id = $row_3["USER_ID"];
                                                $user_name = $row_3["USER_NAME"];
                                                $comment = $row_3["COMMENT_CONTENT"];
                                                $rating = $row_3["RATE_SCORE"];
                                                $hotel_id = $row_3["HOTEL_ID"];
                                                //echo $user_id.$user_name.$comment.$rating.$hotel_id;?>
                                                    <div class="col-lg">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="card-title"><?php echo $user_name ?></h5>
                                                                <h6 class="card-subtitle mb-2 text-muted">
                                                                    <?php 
                                                                        for($i=0; $i<$rating; $i++){
                                                                            ?>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                                                </svg>
                                                                            <?php
                                                                        } 
                                                                    ?>
                                                                </h6>
                                                                <p class="card-text"><?php echo $comment; ?></p>
                                                            </div>
                                                        </div>
                                                    </div><?php
                                            }
                                        }else{
                                            die("FATAL ERROR");
                                        }
                                        $conn->close();
                                    ?>
                                </div>
                                <h3 class="card-title mt-5">Amenities & Facilities</h3>
                                <h6 class="card-subtitle mb-2 text-muted"><a href="#">View all</a></h6>
                                <div class="row">
                                    <?php
                                        $hotel_detail_id = $_GET["hotel_id"];
                                        //echo $hotel_detail_id;
                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                        if($conn){
                                            $sql4 = "SELECT AMENITIES_ID FROM TOP_AMENITIES WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_ID = 1";
                                            $sql5 = "SELECT AMENITIES_ID FROM TOP_AMENITIES WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_ID = 16";
                                            $sql6 = "SELECT AMENITIES_ID FROM TOP_AMENITIES WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_ID = 31";
                                            $sql7 = "SELECT AMENITIES_ID FROM TOP_AMENITIES WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_ID = 28";
                                            $sql8 = "SELECT AMENITIES_ID FROM TOP_AMENITIES WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_ID = 34";
                                            $result4 = $conn->query($sql4);
                                            $result5 = $conn->query($sql5);
                                            $result6 = $conn->query($sql6);
                                            $result7 = $conn->query($sql7);
                                            $result8 = $conn->query($sql8);

                                            while($row_4 = $result4->fetch_assoc()){
                                                $amenities_id = $row_4["AMENITIES_ID"];
                                                //echo $amenities_id."</br>";

                                                if($amenities_id == 1){?>
                                                    <div class="col-lg text-center">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                                                        <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z"/>
                                                                        <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z"/>
                                                                    </svg>
                                                                </h5>
                                                                <h5 class="card-title">Free WiFi</h5>
                                                            </div>
                                                        </div>
                                                    </div><?php
                                                }else{?>
                                                    <div class="col-lg text-center text-muted">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
                                                                        <path d="M15.385 6.115a.485.485 0 0 0-.048-.736A12.443 12.443 0 0 0 8 3 12.44 12.44 0 0 0 .663 5.379a.485.485 0 0 0-.048.736.518.518 0 0 0 .668.05A11.448 11.448 0 0 1 8 4c2.507 0 4.827.802 6.717 2.164.204.148.489.13.668-.049z"/>
                                                                        <path d="M13.229 8.271c.216-.216.194-.578-.063-.745A9.456 9.456 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.577 1.336c.205.132.48.108.652-.065zm-2.183 2.183c.226-.226.185-.605-.1-.75A6.472 6.472 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.408.19.611.09A5.478 5.478 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.611-.091l.015-.015zM9.06 12.44c.196-.196.198-.52-.04-.66A1.99 1.99 0 0 0 8 11.5a1.99 1.99 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .708 0l.707-.707z"/>
                                                                    </svg>
                                                                </h5>
                                                                <h5 class="card-title">Free WiFi</h5>
                                                            </div>
                                                        </div>
                                                    </div><?php
                                                }
                                                while($row_5 = $result5->fetch_assoc()){
                                                    $amenities_id = $row_5["AMENITIES_ID"];
                                                    //echo $amenities_id."</br>";

                                                    if($amenities_id == 16){?>
                                                        <div class="col-lg text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flower3" viewBox="0 0 16 16">
                                                                            <path d="M11.424 8c.437-.052.811-.136 1.04-.268a2 2 0 0 0-2-3.464c-.229.132-.489.414-.752.767C9.886 4.63 10 4.264 10 4a2 2 0 1 0-4 0c0 .264.114.63.288 1.035-.263-.353-.523-.635-.752-.767a2 2 0 0 0-2 3.464c.229.132.603.216 1.04.268-.437.052-.811.136-1.04.268a2 2 0 1 0 2 3.464c.229-.132.489-.414.752-.767C6.114 11.37 6 11.736 6 12a2 2 0 1 0 4 0c0-.264-.114-.63-.288-1.035.263.353.523.635.752.767a2 2 0 1 0 2-3.464c-.229-.132-.603-.216-1.04-.268zM9 4a1.468 1.468 0 0 1-.045.205c-.039.132-.1.295-.183.484a12.88 12.88 0 0 1-.637 1.223L8 6.142a21.73 21.73 0 0 1-.135-.23 12.88 12.88 0 0 1-.637-1.223 4.216 4.216 0 0 1-.183-.484A1.473 1.473 0 0 1 7 4a1 1 0 1 1 2 0zM3.67 5.5a1 1 0 0 1 1.366-.366 1.472 1.472 0 0 1 .156.142c.094.1.204.233.326.4.245.333.502.747.742 1.163l.13.232a21.86 21.86 0 0 1-.265.002 12.88 12.88 0 0 1-1.379-.06 4.214 4.214 0 0 1-.51-.083 1.47 1.47 0 0 1-.2-.064A1 1 0 0 1 3.67 5.5zm1.366 5.366a1 1 0 0 1-1-1.732c.001 0 .016-.008.047-.02.037-.013.087-.028.153-.044.134-.032.305-.06.51-.083a12.88 12.88 0 0 1 1.379-.06c.09 0 .178 0 .266.002a21.82 21.82 0 0 1-.131.232c-.24.416-.497.83-.742 1.163a4.1 4.1 0 0 1-.327.4 1.483 1.483 0 0 1-.155.142zM9 12a1 1 0 0 1-2 0 1.476 1.476 0 0 1 .045-.206c.039-.131.1-.294.183-.483.166-.378.396-.808.637-1.223L8 9.858l.135.23c.241.415.47.845.637 1.223.083.19.144.352.183.484A1.338 1.338 0 0 1 9 12zm3.33-6.5a1 1 0 0 1-.366 1.366 1.478 1.478 0 0 1-.2.064c-.134.032-.305.06-.51.083-.412.045-.898.061-1.379.06-.09 0-.178 0-.266-.002l.131-.232c.24-.416.497-.83.742-1.163a4.1 4.1 0 0 1 .327-.4c.046-.05.085-.086.114-.11.026-.022.04-.03.041-.032a1 1 0 0 1 1.366.366zm-1.366 5.366a1.494 1.494 0 0 1-.155-.141 4.225 4.225 0 0 1-.327-.4A12.88 12.88 0 0 1 9.74 9.16a22 22 0 0 1-.13-.232l.265-.002c.48-.001.967.015 1.379.06.205.023.376.051.51.083.066.016.116.031.153.044l.048.02a1 1 0 1 1-1 1.732zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                                        </svg>
                                                                    </h5>
                                                                    <h5 class="card-title">A/C</h5>
                                                                </div>
                                                            </div>
                                                        </div><?php
                                                    }else{?>
                                                        <div class="col-lg text-center text-muted">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h5>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flower3" viewBox="0 0 16 16">
                                                                            <path d="M11.424 8c.437-.052.811-.136 1.04-.268a2 2 0 0 0-2-3.464c-.229.132-.489.414-.752.767C9.886 4.63 10 4.264 10 4a2 2 0 1 0-4 0c0 .264.114.63.288 1.035-.263-.353-.523-.635-.752-.767a2 2 0 0 0-2 3.464c.229.132.603.216 1.04.268-.437.052-.811.136-1.04.268a2 2 0 1 0 2 3.464c.229-.132.489-.414.752-.767C6.114 11.37 6 11.736 6 12a2 2 0 1 0 4 0c0-.264-.114-.63-.288-1.035.263.353.523.635.752.767a2 2 0 1 0 2-3.464c-.229-.132-.603-.216-1.04-.268zM9 4a1.468 1.468 0 0 1-.045.205c-.039.132-.1.295-.183.484a12.88 12.88 0 0 1-.637 1.223L8 6.142a21.73 21.73 0 0 1-.135-.23 12.88 12.88 0 0 1-.637-1.223 4.216 4.216 0 0 1-.183-.484A1.473 1.473 0 0 1 7 4a1 1 0 1 1 2 0zM3.67 5.5a1 1 0 0 1 1.366-.366 1.472 1.472 0 0 1 .156.142c.094.1.204.233.326.4.245.333.502.747.742 1.163l.13.232a21.86 21.86 0 0 1-.265.002 12.88 12.88 0 0 1-1.379-.06 4.214 4.214 0 0 1-.51-.083 1.47 1.47 0 0 1-.2-.064A1 1 0 0 1 3.67 5.5zm1.366 5.366a1 1 0 0 1-1-1.732c.001 0 .016-.008.047-.02.037-.013.087-.028.153-.044.134-.032.305-.06.51-.083a12.88 12.88 0 0 1 1.379-.06c.09 0 .178 0 .266.002a21.82 21.82 0 0 1-.131.232c-.24.416-.497.83-.742 1.163a4.1 4.1 0 0 1-.327.4 1.483 1.483 0 0 1-.155.142zM9 12a1 1 0 0 1-2 0 1.476 1.476 0 0 1 .045-.206c.039-.131.1-.294.183-.483.166-.378.396-.808.637-1.223L8 9.858l.135.23c.241.415.47.845.637 1.223.083.19.144.352.183.484A1.338 1.338 0 0 1 9 12zm3.33-6.5a1 1 0 0 1-.366 1.366 1.478 1.478 0 0 1-.2.064c-.134.032-.305.06-.51.083-.412.045-.898.061-1.379.06-.09 0-.178 0-.266-.002l.131-.232c.24-.416.497-.83.742-1.163a4.1 4.1 0 0 1 .327-.4c.046-.05.085-.086.114-.11.026-.022.04-.03.041-.032a1 1 0 0 1 1.366.366zm-1.366 5.366a1.494 1.494 0 0 1-.155-.141 4.225 4.225 0 0 1-.327-.4A12.88 12.88 0 0 1 9.74 9.16a22 22 0 0 1-.13-.232l.265-.002c.48-.001.967.015 1.379.06.205.023.376.051.51.083.066.016.116.031.153.044l.048.02a1 1 0 1 1-1 1.732zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                                        </svg>
                                                                    </h5>
                                                                    <h5 class="card-title">A/C</h5>
                                                                </div>
                                                            </div>
                                                        </div><?php
                                                    }
                                                    while($row_6 = $result6->fetch_assoc()){
                                                        $amenities_id = $row_6["AMENITIES_ID"];
                                                        //echo $amenities_id."</br>";

                                                        if($amenities_id == 31){?>
                                                            <div class="col-lg text-center">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stoplights" viewBox="0 0 16 16">
                                                                                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                                <path d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z"/>
                                                                            </svg>
                                                                        </h5>
                                                                        <h5 class="card-title">Parking</h5>
                                                                    </div>
                                                                </div>
                                                            </div><?php
                                                        }else{?>
                                                            <div class="col-lg text-center text-muted">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <h5>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stoplights" viewBox="0 0 16 16">
                                                                                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm1.5 2.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                                                <path d="M4 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v2h2c-.167.5-.8 1.6-2 2v1a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-1c-1.2-.4-1.833-1.5-2-2h2V8c-1.2-.4-1.833-1.5-2-2h2V4c-1.2-.4-1.833-1.5-2-2h2zm2-1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6z"/>
                                                                            </svg>
                                                                        </h5>
                                                                        <h5 class="card-title">Parking</h5>
                                                                    </div>
                                                                </div>
                                                            </div><?php
                                                        }
                                                        while($row_7 = $result7->fetch_assoc()){
                                                            $amenities_id = $row_7["AMENITIES_ID"];
                                                            //echo $amenities_id."</br>";

                                                            if($amenities_id == 28){?>
                                                                <div class="col-lg text-center">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                                                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                                                                                </svg>
                                                                            </h5>
                                                                            <h5 class="card-title">TV</h5>
                                                                        </div>
                                                                    </div>
                                                                </div><?php
                                                            }else{?>
                                                                <div class="col-lg text-center text-muted">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <h5>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                                                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
                                                                                </svg>
                                                                            </h5>
                                                                            <h5 class="card-title">TV</h5>
                                                                        </div>
                                                                    </div>
                                                                </div><?php
                                                            }
                                                            while($row_8 = $result8->fetch_assoc()){
                                                                $amenities_id = $row_8["AMENITIES_ID"];
                                                                //echo $amenities_id."</br>";

                                                                if($amenities_id == 34){?>
                                                                    <div class="col-lg text-center">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                                                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202l-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                                    </svg> 
                                                                                </h5>
                                                                                <h5 class="card-title">Pool</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div><?php
                                                                }else{?>
                                                                    <div class="col-lg text-center text-muted">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                                                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm6.43-5.228a7.025 7.025 0 0 1-3.658 3.658l-1.115-2.788a4.015 4.015 0 0 0 1.985-1.985l2.788 1.115zM5.228 14.43a7.025 7.025 0 0 1-3.658-3.658l2.788-1.115a4.015 4.015 0 0 0 1.985 1.985L5.228 14.43zm9.202-9.202l-2.788 1.115a4.015 4.015 0 0 0-1.985-1.985l1.115-2.788a7.025 7.025 0 0 1 3.658 3.658zm-8.087-.87a4.015 4.015 0 0 0-1.985 1.985L1.57 5.228A7.025 7.025 0 0 1 5.228 1.57l1.115 2.788zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                                                    </svg> 
                                                                                </h5>
                                                                                <h5 class="card-title">Pool</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div><?php
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }else{
                                            die("FATAL ERROR");
                                        }
                                        $conn->close();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card">
                            <div class="card-header">
                                <h2><?php echo $hotel_name; ?>@<?php echo $location ?></h2>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Hotel Info</h3>
                                <?php echo $info; ?>
                                <h3 class="card-title mt-5">All Amenities</h3>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title"> Hotel Facilities </h5>
                                                <h6 class="card-subtitle text-muted">
                                                    <?php
                                                        $hotel_detail_id = $_GET["hotel_id"];
                                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                        if($conn){
                                                            $sql9 = "SELECT * FROM HOTEL_AMENITIES_VIEW WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_TYPE = 'Hotel Facilities'";
                                                            $result9 = $conn->query($sql9);

                                                            while($row_9 = $result9->fetch_assoc()){
                                                                //$amenitiesID = $row_9["AMENITIES_ID"];
                                                                $amenity = $row_9["AMENITIY"];
                                                                //$amenity_type = $row_9["AMENITIES_TYPE"];

                                                                //echo $amenities_id."</br>";
                                                                //echo "TYPE: ".$amenity_type."</br>";
                                                                echo "-".$amenity."</br>";
                                                            }
                                                        }else{
                                                            die("FATAL ERROR");
                                                        }
                                                        $conn->close();
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                    <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title"> Room Facilities </h6>
                                                <h6 class="card-subtitle text-muted">
                                                    <?php
                                                        $hotel_detail_id = $_GET["hotel_id"];
                                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                        if($conn){
                                                            $sql9 = "SELECT * FROM HOTEL_AMENITIES_VIEW WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_TYPE = 'Room Facilities'";
                                                            $result9 = $conn->query($sql9);

                                                            while($row_9 = $result9->fetch_assoc()){
                                                                //$amenitiesID = $row_9["AMENITIES_ID"];
                                                                $amenity = $row_9["AMENITIY"];
                                                                //$amenity_type = $row_9["AMENITIES_TYPE"];

                                                                //echo $amenities_id."</br>";
                                                                //echo "TYPE: ".$amenity_type."</br>";
                                                                echo "-".$amenity."</br>";
                                                            }
                                                        }else{
                                                            die("FATAL ERROR");
                                                        }
                                                        $conn->close();
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                    <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title"> Accessibility </h6>
                                                <h6 class="card-subtitle text-muted">
                                                    <?php
                                                        $hotel_detail_id = $_GET["hotel_id"];
                                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                        if($conn){
                                                            $sql9 = "SELECT * FROM HOTEL_AMENITIES_VIEW WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_TYPE = 'Accessibility'";
                                                            $result9 = $conn->query($sql9);

                                                            while($row_9 = $result9->fetch_assoc()){
                                                                //$amenitiesID = $row_9["AMENITIES_ID"];
                                                                $amenity = $row_9["AMENITIY"];
                                                                //$amenity_type = $row_9["AMENITIES_TYPE"];

                                                                //echo $amenities_id."</br>";
                                                                //echo "TYPE: ".$amenity_type."</br>";
                                                                echo "-".$amenity."</br>";
                                                            }
                                                        }else{
                                                            die("FATAL ERROR");
                                                        }
                                                        $conn->close();
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                    <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title"> Wellness </h6>
                                                <h6 class="card-subtitle text-muted">
                                                    <?php
                                                        $hotel_detail_id = $_GET["hotel_id"];
                                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                        if($conn){
                                                            $sql9 = "SELECT * FROM HOTEL_AMENITIES_VIEW WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_TYPE = 'Wellness'";
                                                            $result9 = $conn->query($sql9);

                                                            while($row_9 = $result9->fetch_assoc()){
                                                                //$amenitiesID = $row_9["AMENITIES_ID"];
                                                                $amenity = $row_9["AMENITIY"];
                                                                //$amenity_type = $row_9["AMENITIES_TYPE"];

                                                                //echo $amenities_id."</br>";
                                                                //echo "TYPE: ".$amenity_type."</br>";
                                                                echo "-".$amenity."</br>";
                                                            }
                                                        }else{
                                                            die("FATAL ERROR");
                                                        }
                                                        $conn->close();
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <h6 class="card-title"> Children </h6>
                                                <h6 class="card-subtitle text-muted">
                                                    <?php
                                                        $hotel_detail_id = $_GET["hotel_id"];
                                                        $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                        if($conn){
                                                            $sql9 = "SELECT * FROM HOTEL_AMENITIES_VIEW WHERE HOTEL_ID = '$hotel_detail_id' AND AMENITIES_TYPE = 'Children'";
                                                            $result9 = $conn->query($sql9);

                                                            while($row_9 = $result9->fetch_assoc()){
                                                                //$amenitiesID = $row_9["AMENITIES_ID"];
                                                                $amenity = $row_9["AMENITIY"];
                                                                //$amenity_type = $row_9["AMENITIES_TYPE"];

                                                                //echo $amenities_id."</br>";
                                                                //echo "TYPE: ".$amenity_type."</br>";
                                                                echo "-".$amenity."</br>";
                                                            }
                                                        }else{
                                                            die("FATAL ERROR");
                                                        }
                                                        $conn->close();
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="card-title mt-5">Arrival / Departure</h3>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                    $hotel_detail_id = $_GET["hotel_id"];
                                                    $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                    if($conn){
                                                        $sql10 = "SELECT CHECK_IN, CHECK_OUT FROM HOTEL WHERE HOTEL_ID = '$hotel_detail_id'";
                                                        $result10 = $conn->query($sql10);

                                                        while($row_10 = $result10->fetch_assoc()){
                                                            $check_in = $row_10["CHECK_IN"];
                                                            $check_out = $row_10["CHECK_OUT"];?>
                                                            
                                                            <h6 class="card-title"> Check-in: <?php echo substr($check_in, 0, 5) ?></h6>
                                                            <h6 class="card-title"> Check-out: <?php echo substr($check_out, 0, 5) ?> </h6><?php
                                                        }
                                                    }else{
                                                        die("FATAL ERROR");
                                                    }
                                                    $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="card-title mt-5">Contact</h3>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                    $hotel_detail_id = $_GET["hotel_id"];
                                                    $conn = mysqli_connect("localhost", "root", "", "hotel");

                                                    if($conn){
                                                        $sql11 = "SELECT ADDRESS, CONTACT FROM HOTEL WHERE HOTEL_ID = '$hotel_detail_id'";
                                                        $result11 = $conn->query($sql11);

                                                        while($row_11 = $result11->fetch_assoc()){
                                                            $address = $row_11["ADDRESS"];
                                                            $contact = $row_11["CONTACT"];?>
                                                            
                                                            <h6 class="card-title"> <?php echo $address ?></h6>
                                                            <h6 class="card-title"> <?php echo $contact ?> </h6><?php
                                                        }
                                                    }else{
                                                        die("FATAL ERROR");
                                                    }
                                                    $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="card-title mt-5">Enquiry</h3>
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="hotelierMail.php?hotel_id=<?=$hotel_detail_id?>" method="POST">
                                                    <p class="lead">Enter you enquiry below and we will get to you soon</p>
                                                    <p><textarea class="form-control form-control-lg" name="content" placeholder="Enter your enquiry here"></textarea></p>
                                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                </form>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header">
                                <h2><?php echo $hotel_name; ?>@<?php echo $location ?></h2>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Rating overview</h3>
                                
                                <h3 class="card-title mt-5">Guest reviews</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rooms" role="tabpanel" aria-labelledby="pills-contact-tab">4</div>
                </div>            
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>
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
            
            //echo "Hotelierrrrrrr";
        ?>
        <main class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-white active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-booking" role="tab" aria-controls="pills-contact" aria-selected="false">My Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" id="pills-inout-tab" data-toggle="pill" href="#pills-inout" role="tab" aria-controls="pills-contact" aria-selected="false">Manage checkings</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="jumbotron">
                        <h1 class="display-4">Hello, <?php echo $_SESSION["user"] ?>!</h1>
                        <p class="lead">In this page, you will be able to view your booking and update your details</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card">
                        <div class="card-header">
                            <h2>Profile of <?php echo $_SESSION["user"]; ?></h2>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Email address</h3>
                            <div class="row">
                                <div class="col-lg mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php                                                
                                                $conn = mysqli_connect("localhost", "root", "", "hotel");
    
                                                if($conn){
                                                    $sql = "SELECT HOTELIER_EMAIL FROM HOTELIER WHERE HOTELIER_ID = '$current_user_id'";
                                                    $result = $conn->query($sql);
    
                                                    while($row = $result->fetch_assoc()){
                                                        $user_email = $row["HOTELIER_EMAIL"];
                                                        
                                                        echo $user_email;
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
                            <h3 class="card-title">Account status</h3>
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php                                                
                                                $conn = mysqli_connect("localhost", "root", "", "hotel");
    
                                                if($conn){
                                                    $sql2 = "SELECT ACC_STAT FROM HOTELIER WHERE HOTELIER_ID = '$current_user_id'";
                                                    $sql3 = "SELECT ADMIN_EMAIL FROM ADMIN WHERE ADMIN_ID = 2";
                                                    $result2 = $conn->query($sql2);
                                                    $result3 = $conn->query($sql3);
    
                                                    while($row_2 = $result2->fetch_assoc()){
                                                        $user_stat = $row_2["ACC_STAT"];
                                                        
                                                        while($row_3 = $result3->fetch_assoc()){
                                                            $admin_email = $row_3["ADMIN_EMAIL"];
                                                            
                                                            if($user_stat == 0){
                                                                echo "Normal, enjoy your stay";
                                                            }else{
                                                                echo "Blacklisted, please contact the admin</br>";
                                                                echo "Admin email: ";?>
                                                                <b><?php echo $admin_email ?></b><?php
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
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-booking" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-10">
                                    <h3 class="card-title text-left">My Hotels</h3>
                                </div>
                                <div class="col-lg">
                                    <a href="addHotel.php?hotelier_id=<?=$current_user_id?>" class="btn btn-primary" >Add new hotel</a>
                                </div>
                            </div>                            
                        </div>
                        <div class="card-body">
                            <?php                                 
                                $conn = mysqli_connect("localhost", "root", "", "hotel");

                                if($conn){
                                    $sql4 = "SELECT * FROM HOTEL WHERE HOTELIER_ID = '$current_user_id'";
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
                                                        <a href="selectedHotel.php?hotel_id=<?=$hotel_id?>" class="btn btn-danger">Edit infomation</a>
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
                </div>
                <div class="tab-pane fade" id="pills-inout" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage check-in & check-out</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="manageCheck.php" method="GET">
                                                <div class="form-group">
                                                    <h5 class="card-title">Enter booking ID</h5>
                                                    <input type="text" class="form-control" name="book-id" id="book-id" placeholder="e.g 11, 51" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
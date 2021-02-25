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
                    <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-user" role="tab" aria-controls="pills-contact" aria-selected="false">Manage Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" id="pills-contact-tab" data-toggle="pill" href="#pills-hotelier" role="tab" aria-controls="pills-contact" aria-selected="false">Manage Hoteliers</a>
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
                                                $current_user_id = $_SESSION["userID"];
                                                $conn = mysqli_connect("localhost", "root", "", "hotel");
    
                                                if($conn){
                                                    $sql = "SELECT ADMIN_EMAIL FROM ADMIN WHERE ADMIN_ID = '$current_user_id'";
                                                    $result = $conn->query($sql);
    
                                                    while($row = $result->fetch_assoc()){
                                                        $user_email = $row["ADMIN_EMAIL"];
                                                        
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
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-user" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Users</h3>
                        </div>
                        <div class="card-body">
                            <?php 
                                $current_user_id = $_SESSION["userID"];
                                $conn = mysqli_connect("localhost", "root", "", "hotel");

                                if($conn){
                                    $sql4 = "SELECT * FROM USER";
                                    $result4 = $conn->query($sql4);

                                    while($row_4 = $result4->fetch_assoc()){
                                        $user_id = $row_4["USER_ID"];
                                        $user_name = $row_4["USER_NAME"];
                                        $user_email = $row_4["USER_EMAIL"];
                                        $user_stat = $row_4["ACC_STAT"];?>

                                        <div class="row mb-3">               
                                            <div class="col-lg">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">User ID: <b><?php echo $user_id; ?></b></p>
                                                        <p class="card-text">User name: <b><?php echo $user_name; ?></b></p>
                                                        <p class="card-text">User email: <b><?php echo $user_email; ?></b></p>
                                                        <p class="card-text">User status: <b><?php echo $user_stat; ?></b></p>
                                                        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="right" 
                                                        title="Are you sure you want to cancel?">Edit infomation</a>
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
                <div class="tab-pane fade" id="pills-hotelier" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Hoteliers</h3>
                        </div>
                        <div class="card-body">
                            <?php 
                                $current_user_id = $_SESSION["userID"];
                                $conn = mysqli_connect("localhost", "root", "", "hotel");

                                if($conn){
                                    $sql4 = "SELECT * FROM Hotelier";
                                    $result4 = $conn->query($sql4);

                                    while($row_4 = $result4->fetch_assoc()){
                                        $hotelier_id = $row_4["HOTELIER_ID"];
                                        $hotelier_name = $row_4["HOTELIER_NAME"];
                                        $hotelier_email = $row_4["HOTELIER_EMAIL"];
                                        $hotelier_stat = $row_4["ACC_STAT"];?>

                                        <div class="row mb-3">               
                                            <div class="col-lg">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <p class="card-text">User ID: <b><?php echo $hotelier_id; ?></b></p>
                                                        <p class="card-text">User name: <b><?php echo $hotelier_name; ?></b></p>
                                                        <p class="card-text">User email: <b><?php echo $hotelier_email; ?></b></p>
                                                        <p class="card-text">User status: <b><?php echo $hotelier_stat; ?></b></p>
                                                        <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="right" 
                                                        title="Are you sure you want to cancel?">Edit infomation</a>
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
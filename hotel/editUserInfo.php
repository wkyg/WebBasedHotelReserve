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
        <title>Edit User Information</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            $user_id = $_GET["user_id"];

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){
                $sql = "SELECT * FROM USER WHERE USER_ID = '$user_id'";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    $user_id = $row["USER_ID"];
                    $user_name = $row["USER_NAME"];
                    $user_email = $row["USER_EMAIL"];
                    $user_stat = $row["ACC_STAT"];
                    $reason = $row["BLACKLIST_REASON"];
                }
            }else{
                die("FATAL ERROR");
            }
            $conn->close();
        ?>
        <main class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-3">               
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Selected User Details</h5>
                                    <p class="card-text">User ID: <b><?php echo $user_id ?></b></p>
                                    <p class="card-text">User name: <b><?php echo $user_name ?></b></p>
                                    <p class="card-text">User email: <b><?php echo $user_email ?></b></p>
                                    <p class="card-text">User status: 
                                        <?php
                                            if($user_stat == 0){?>
                                                <span class="badge badge-success">Normal</span><?php
                                            }else{?>
                                                <span class="badge badge-danger">Blacklisted</span><?php
                                            }
                                        ?>
                                    </p>
                                    <?php
                                        if($user_stat == 0){
                                            
                                        }else{?>
                                            <p class="card-text">Blacklist reason: <b><?php echo $reason ?></b></p><?php
                                        }
                                    ?>                                    
                                    <?php
                                        if($user_stat == 0){?>
                                            <a href="blacklistUser.php?user_id=<?=$user_id?>" class="btn btn-danger">Blacklist selected user</a><?php
                                        }else{?>
                                            <a href="whitelistUser.php?user_id=<?=$user_id?>" class="btn btn-success">Whitelist selected user</a><?php
                                        }
                                    ?>                                    
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
    </body>
</html>
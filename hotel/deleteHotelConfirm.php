<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv = "refresh" content = "3; url = profilePage.php" />-->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/contactStyle.css">
        <title>Add hotel</title>
    </head>
    <body>
        <main class="container">
            <?php
                $hotel_id = $_GET["hotel_id"];

                $flag = FALSE;

                //echo $hotel_id;

                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){
                    $sql = "DELETE FROM HOTEL WHERE HOTEL_ID = '$hotel_id'";
                    $sql2 = "DELETE FROM HOTEL_IMG WHERE HOTEL_ID = '$hotel_id'";
                    $sql3 = "DELETE FROM HOTEL_AMENITIES WHERE HOTEL_ID = '$hotel_id'";

                    if(mysqli_query($conn, $sql3)){
                        echo "deleted_1";
                        if(mysqli_query($conn, $sql2)){
                            echo "deleted_2";
                            if(mysqli_query($conn, $sql)){
                                echo "deleted_3";
                                $flag = TRUE;
                            }else{
                                echo "fail_3";
                            }
                        }else{
                            echo "fail_2";
                        }
                    }else{
                        echo "fail_1";
                    }

                    if($flag == TRUE){?>
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully deleted</h1>                            
                            <p class="lead">Thank you!</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php   
                    }else{?>
                        <div class="jumbotron">
                            <h1 class="display-4">Fail to delete</h1>                            
                            <p class="lead">Try again?</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php   
                    }
                }else{
                    die("FATAL ERROR");
                }
                $conn->close();
            ?>
        </main>
        <?php
            include_once "footer.php";
        ?>
    </body>
</html>

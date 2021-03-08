<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--Local CSS-->
        <link rel="stylesheet" type=text/css href="css/bookStyle.css">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="manifest" href="images/site.webmanifest">
        <title>Rate & Comment</title>
    </head>
    <body>
        <?php
            include_once "header.php";

            $user_id = $_SESSION["userID"];

            $hotel_id = $_GET["hotel_id"];

            $rate = $_POST["rate"];            
            $comment = $_POST["comment"];

            $conn = mysqli_connect("localhost", "root", "", "hotel");
        
            if($conn){
                $sql = "INSERT INTO RATING (RATING_ID, RATE_SCORE, HOTEL_ID, USER_ID) VALUES ('', '$rate', '$hotel_id', '$user_id')";
                $sql2 = "INSERT INTO COMMENT (COMMENT_ID, COMMENT_CONTENT, USER_ID, HOTEL_ID) VALUES ('', '$comment', '$user_id', '$hotel_id')";
                if(!empty($comment)){
                    //echo "not empty";
                    if(mysqli_query($conn, $sql)){
                        //echo "inserted rating";
                        if(mysqli_query($conn, $sql2)){
                            //echo "inserted comment";?>
                            <main class="container pt-5 mt-5">
                                <div class="jumbotron">
                                    <h1 class="display-4">Comment and rate success</h1>                                    
                                    <p class="lead">Thank you for your feeback!</p>
                                    <p>To profile page!<a href="profilePage.php"> Click here</a></p>
                                </div>
                            </main><?php
                        }else{
                            //echo "comment fail";?>
                            <main class="container pt-5 mt-5">
                            <div class="jumbotron">
                                <h1 class="display-4">Comment and fate failed</h1>                                    
                                <p class="lead">try again?</p>
                                <p>To profile page!<a href="profilePage.php"> Click here</a></p>
                            </div>
                        </main><?php
                        }
                    }else{
                        //echo "rating fail";
                    }
                }else{
                    //echo "empty";
                    if(mysqli_query($conn, $sql)){
                        //echo "inserted rating";?>
                        <main class="container pt-5 mt-5">
                            <div class="jumbotron">
                                <h1 class="display-4">Rate success</h1>                                    
                                <p class="lead">Thank you for your feeback!</p>
                                <p>To profile page!<a href="profilePage.php"> Click here</a></p>
                            </div>
                        </main><?php
                    }else{
                        //echo "rating fail";?>
                        <main class="container pt-5 mt-5">
                            <div class="jumbotron">
                                <h1 class="display-4">Rate failed</h1>                                    
                                <p class="lead">try again?</p>
                                <p>To profile page!<a href="profilePage.php"> Click here</a></p>
                            </div>
                        </main><?php
                    }
                }               
            }else{
                die("FATAL ERROR");
            }
            $conn->close();
        ?>
    </body>
</html>
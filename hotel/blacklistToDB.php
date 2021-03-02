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
        <title>Blacklist</title>
    </head>
    <body>
        <?php 
            include_once "header.php";

            $user_id = $_GET["user_id"];
            $reason = $_POST["black-reason"];

            $conn = mysqli_connect("localhost", "root", "", "hotel");

            if($conn){                
                $sql = "UPDATE USER SET ACC_STAT = '1', BLACKLIST_REASON = '$reason'  WHERE USER_ID = '$user_id'";

                if(mysqli_query($conn, $sql)){?>
                   <main class="container pt-5 mt-5">
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully blacklisted</h1>
                            <p class="lead">Click on the link to redirect back to your profile page</p>                            
                            <p>To profile page!<a href="profilePageAdmin.php"> Click here</a></p>
                        </div>
                    </main><?php
                }else{
                    echo "fail";
                }
            }else{
                die("FATAL ERROR");
            }

            $conn->close();
        ?>
        
    </body>
    <?php 
        include_once "footer.php";
    ?>
</html>
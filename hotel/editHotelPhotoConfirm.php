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
        <title>Change photo</title>
    </head>
    <body>
        <main class="container">
            <?php
                $hotel_id = $_GET["hotel_id"];

                $flag = FALSE;

                $main_img = $_FILES['main-img']['tmp_name'];
                $main_img = base64_encode(file_get_contents(addslashes($main_img)));

                $sub_img_1 = $_FILES['hotel-img-1']['tmp_name'];
                $sub_img_1 = base64_encode(file_get_contents(addslashes($sub_img_1)));

                $sub_img_2 = $_FILES['hotel-img-2']['tmp_name'];
                $sub_img_2 = base64_encode(file_get_contents(addslashes($sub_img_2)));

                $sub_img_3 = $_FILES['hotel-img-3']['tmp_name'];
                $sub_img_3 = base64_encode(file_get_contents(addslashes($sub_img_3)));

                $sub_img_4 = $_FILES['hotel-img-4']['tmp_name'];
                $sub_img_4 = base64_encode(file_get_contents(addslashes($sub_img_4)));

                $sub_img_5 = $_FILES['hotel-img-5']['tmp_name'];
                $sub_img_5 = base64_encode(file_get_contents(addslashes($sub_img_5)));

                //echo $main_image.$sub_image_1.$sub_image_2.$sub_image_3.$sub_image_4.$sub_image_5;

                $conn = mysqli_connect("localhost", "root", "", "hotel");

                if($conn){
                    $sql = "UPDATE HOTEL SET HOTEL_IMG='$main_img' WHERE HOTEL_ID='$hotel_id'";    
                    $sql2 = "UPDATE HOTEL_IMG SET IMG_1='$sub_img_1', IMG_2='$sub_img_2', IMG_3='$sub_img_3', 
                    IMG_4='$sub_img_4', IMG_5='$sub_img_5' where HOTEL_ID = '$hotel_id'";

                    if(mysqli_query($conn, $sql)){
                        //echo "updated_1";      
                        if(mysqli_query($conn, $sql2)){
                            $flag = TRUE; 
                        }else{
                            echo "fail_2";
                        }                 
                    }else{
                        echo "fail_1";
                    }

                    if($flag == TRUE){?>
                        <div class="jumbotron">
                            <h1 class="display-4">Successfully updated</h1>                            
                            <p class="lead">Thank you!</p>
                            <p>To profile page!<a href="profilePageHotelier.php"> Click here</a></p>
                        </div><?php      
                    }else{?>
                        <div class="jumbotron">
                            <h1 class="display-4">Fail to update</h1>                            
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

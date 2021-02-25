<?php
    $u_name = $_GET["user_name"];
    $u_mail = $_GET["user_mail"];

    $pass = $_POST["password"];

    $cryptPass = password_hash("$pass", PASSWORD_DEFAULT);
    
    $flag = FALSE;

    //echo $pass;
    
    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT * FROM USER WHERE USER_NAME = '$u_name' AND USER_EMAIL = '$u_mail'";
        $sql2 = "SELECT * FROM HOTELIER WHERE HOTELIER_NAME = '$u_name' AND HOTELIER_EMAIL = '$u_mail'";
        $sql3 = "UPDATE USER SET USER_PASS = '$cryptPass' WHERE USER_NAME = '$u_name' AND USER_EMAIL = '$u_mail'";
        $sql4 = "UPDATE HOTELIER SET HOTELIER_PASS = '$cryptPass' WHERE HOTELIER_NAME = '$u_name' AND HOTELIER_EMAIL = '$u_mail'";
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);

        if(mysqli_query($conn, $sql)){ //USER
            while($row = $result->fetch_assoc()){
                $u_email = $row["USER_EMAIL"];
                $u_name = $row["USER_NAME"];
                echo $u_email.$u_name;                
            }
            if(mysqli_query($conn, $sql3)){
                echo "change success user";
                $flag = TRUE;
            }else{
                echo "change fail";
            }
        }

        if(mysqli_query($conn, $sql2)){ //HOTELIER
            while($row_2 = $result2->fetch_assoc()){
                $u_email = $row_2["HOTELIER_EMAIL"];
                $u_name = $row_2["HOTELIER_NAME"];
                echo $u_email.$u_name;                
            }
            if(mysqli_query($conn, $sql4)){
                echo "change success hotelier";
                $flag = TRUE;
            }else{
                echo "change fail";
            }
        }
    }else{
        die("FATAL ERROR");
    }

    if($flag == TRUE){
        header("location: resetSuccess.php");
    }else{
        header("location resetFail.php");
    }

?>
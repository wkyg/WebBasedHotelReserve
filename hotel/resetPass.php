<?php
    $u_name = $_POST["user"];
    $u_mail = $_POST["mail"];

    $flag = FALSE;

    echo $u_name.$u_mail."</br>";

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT USER_NAME, USER_EMAIL FROM USER";
        $sql2 = "SELECT HOTELIER_NAME, HOTELIER_EMAIL FROM HOTELIER";

        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);

        if(mysqli_query($conn, $sql)){
            while($row = $result->fetch_assoc()) {
                $user_name = $row["USER_NAME"];
                $user_mail = $row["USER_EMAIL"];

                if($u_name == $user_name && $u_mail == $user_mail){
                    echo "match"."</br>";
                    $flag = TRUE;
                }else{
                    echo "no matching"."</br>";                   
                }
            }
        }

        if(mysqli_query($conn, $sql2)){
            while($row_2 = $result2->fetch_assoc()) {
                $user_name = $row_2["HOTELIER_NAME"];
                $user_mail = $row_2["HOTELIER_EMAIL"];

                if($u_name == $user_name && $u_mail == $user_mail){
                    echo "match"."</br>";
                    $flag = TRUE;
                }else{
                    echo "no matching"."</br>";                   
                }
            }
        }
    }else{
        die("FATAL ERROR");
    }

    $conn->close();

    if($flag == TRUE){
        header("Location: resetPassMail.php"."?u_name=".$u_name."&u_mail=".$u_mail);
        exit();
    }else{
        header("Location: resetFail.php");
        exit();
    }
?>
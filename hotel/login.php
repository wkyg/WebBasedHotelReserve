<?php
    session_start();
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $tempUser = "";
    $tempPass = "";
    $cryptFlag = FALSE;


    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT USER_ID, USER_NAME, USER_PASS FROM USER";
        $result = $conn->query($sql);

        $sql_2 = "SELECT HOTELIER_ID, HOTELIER_NAME, HOTELIER_PASS FROM HOTELIER";
        $result_2 = $conn->query($sql_2);

        $sql_3 = "SELECT ADMIN_ID, ADMIN_NAME, ADMIN_PASS FROM ADMIN";
        $result_3 = $conn->query($sql_3);

        //Display results
        /*
        //User
        if(mysqli_query($conn, $sql)){
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "USER: " . $row["USER_NAME"]. " - PASS: " . $row["USER_PASS"]. "<br>";
                  }
            }else{
                echo "no results";
            }
        }else{
            echo "ERROR";
        }
        //Hotelier
        if(mysqli_query($conn, $sql_2)){
            if($result_2->num_rows > 0){
                while($row = $result_2->fetch_assoc()) {
                    echo "HOTELIER: " . $row["HOTELIER_NAME"]. " - PASS: " . $row["HOTELIER_PASS"]. "<br>";
                  }
            }else{
                echo "no results";
            }
        }else{
            echo "ERROR";
        }
        //Admin
        if(mysqli_query($conn, $sql_3)){
            if($result_3->num_rows > 0){
                while($row = $result_3->fetch_assoc()) {
                    echo "ADMIN: " . $row["ADMIN_NAME"]. " - PASS: " . $row["ADMIN_PASS"]. "<br>";
                  }
            }else{
                echo "no results";
            }
        }else{
            echo "ERROR";
        }
        */
        //until here

        //--//

        //begin check criteria
        if(mysqli_query($conn, $sql)){
            while($row = $result->fetch_assoc()) {
                $tempUserID = $row["USER_ID"];
                $tempUser = $row["USER_NAME"];
                $tempPass = $row["USER_PASS"];
                if (password_verify("$pass", "$tempPass")){
                    //echo "yes"."</br>";
                    $cryptFlag = TRUE;
                }else{
                    //echo "no"."</br>";
                    $cryptFlag = FALSE;
                }
                if ($user == $tempUser && $cryptFlag == TRUE){
                    echo "yes User". "</br>";
                    $_SESSION["logged"] = TRUE;
                    $_SESSION["user"] = $user;
                    $_SESSION["userID"] = $tempUserID;
                    $_SESSION["accType"] = 1; //user
                    //header("Location: loginSuccess.php");
                    //exit();  
                    break;
                }else{
                    echo "no user". "</br>";
                    //echo '<script>alert("wrong")</script>'; 
                    //header("Location: loginFail.php");
                    //exit();
                }              
            }        
        }
        
        if(mysqli_query($conn, $sql_2)){
            while($row = $result_2->fetch_assoc()) {
                $tempUserID = $row["HOTELIER_ID"];
                $tempUser = $row["HOTELIER_NAME"];
                $tempPass = $row["HOTELIER_PASS"];
                if (password_verify("$pass", "$tempPass")){
                    //echo "yes"."</br>";
                    $cryptFlag = TRUE;
                }else{
                    //echo "no"."</br>";
                    $cryptFlag = FALSE;
                }
                if ($user == $tempUser && $cryptFlag == TRUE){
                    echo "yes Hotelier". "</br>";
                    $_SESSION["logged"] = TRUE;
                    $_SESSION["user"] = $user;
                    $_SESSION["userID"] = $tempUserID;
                    $_SESSION["accType"] = 2; //hotelier
                    //header("Location: loginSuccess.php");
                    //exit();
                    break;
                }else{
                    echo "no hotelier". "</br>";
                    //header("Location: loginFail.php");
                    //exit();
                }
            }        
        }

        if(mysqli_query($conn, $sql_3)){
            while($row = $result_3->fetch_assoc()) {
                $tempUserID = $row["ADMIN_ID"];
                $tempUser = $row["ADMIN_NAME"];
                $tempPass = $row["ADMIN_PASS"];
                if (password_verify("$pass", "$tempPass")){
                    //echo "yes"."</br>";
                    $cryptFlag = TRUE;
                }else{
                    //echo "no"."</br>";
                    $cryptFlag = FALSE;
                }
                if ($user == $tempUser && $cryptFlag == TRUE){
                    echo "yes Admin". "</br>";
                    $_SESSION["logged"] = TRUE;
                    $_SESSION["user"] = $user;
                    $_SESSION["userID"] = $tempUserID;
                    $_SESSION["accType"] = 0; //admin
                    //header("Location: loginSuccess.php");
                    //exit();
                    break;
                }else{
                    echo "no admin". "</br>";
                    //header("Location: loginFail.php");
                    //exit();
                }
            }        
        }
        
        //until here
    }else{
        die("FATAL ERROR");
    }

    $conn->close();

    if($_SESSION["logged"] == TRUE){
        header("Location: loginSuccess.php");
    }else{
        header("Location: loginFail.php");
    }
?>
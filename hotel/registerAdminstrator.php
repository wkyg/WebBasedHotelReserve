<?php
    $user = $_POST["username"];
    $mail = $_POST["email"];
    $pass = $_POST["password"];
    $repass = $_POST["rePass"];
    $tempUser = "";
    $tempMail = "";
    $bool = false;
    $cont = "Registration Success";

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    //echo "user entered </br>";
    //echo $user."</br>"; 
    //echo $mail."</br>";
    //echo $pass."</br>";
    //echo "-----------------</br>";

    $cryptPass = password_hash("$pass", PASSWORD_DEFAULT);
    //echo $cryptPass;
    
    if($conn){
        $sql = "INSERT INTO ADMIN (ADMIN_ID, ADMIN_NAME, ADMIN_PASS, ADMIN_EMAIL, ACC_TYPE) VALUES ('', '$user', '$cryptPass', '$mail', '0')";
        $sql_2 = "SELECT ADMIN_NAME, ADMIN_EMAIL FROM ADMIN";
        $result = $conn->query($sql_2);

        if(mysqli_query($conn, $sql_2)){
            while($row = $result->fetch_assoc()) {
                $tempUser = $row["ADMIN_NAME"];
                $tempMail = $row["ADMIN_EMAIL"];
                //echo $tempUser."--database</br>";
                //echo $tempMail."--database</br>";
                if (($user == $tempUser && $mail == $tempMail) || ($user != $tempUser && $mail == $tempMail)
                || ($user == $tempUser && $mail != $tempMail)){
                    echo "Existing admin already exist in our database". "</br>";
                    $bool = false;
                    header("Location: existing.php");
                    exit();
                break;
                }else{
                    echo "--no--</br>";
                    $bool = true;
                } 
            }     
        }

        if($bool == true){
            if(mysqli_query($conn, $sql)){
                echo "Register success". "</br>";
                //$adminMailChk = mail("hotelfypp@gmail.com", "User_Enquiry", $cont, "From: hotelfypp@gmail.com");
                $custMailChk = mail($mail, "Thank you for your registration", "Admin Registered", "From: hotelfypp@gmail.com");
                if($custMailChk){
                    header("Location: registerSuccess.php");
                    exit();
                }else{
                    //echo "Conformation failed";                    
                }
            }else{
                echo "ERROR";
            } 
        }
    }else{
        die("FATAL ERROR");
    }
    
    $conn->close();
?>
<?php
/*
    $img = 'IMG_';
    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT * FROM HOTEL_IMG";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){ 
            for($i=1; $i<6; $i++){?>
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row[$img.$i]); ?>" /><?php
            }
        }
    }else{
        die("FATAL ERROR");
    }
    
    $conn->close();
    $pass = "test";
    $test = password_hash("$pass", PASSWORD_DEFAULT);
    echo $test;

    echo "</br>";

    $hash = $test;
    echo $hash;

    echo "</br>";
    
    if(password_verify("test", $hash)){
        echo "yes";
    }else{
        echo "no";
    }
*/
/*
?>  
<?php
    //$user = $_POST["user"];
    //$pass = $_POST["pass"];
    $user = "kai";
    $pass = "kai";
    $tempUser = "";
    $tempPass = "";
    $cryptFlag = FALSE;

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT USER_NAME, USER_PASS FROM USER";
        $result = $conn->query($sql);

        //begin check criteria
        if(mysqli_query($conn, $sql)){
            while($row = $result->fetch_assoc()) {
                $tempUser = $row["USER_NAME"];
                $tempPass = $row["USER_PASS"];
                //echo $tempUser."</br>";
                echo $tempPass."</br>";
                if (password_verify("$pass", "$tempPass")){
                    echo "yes"."</br>";
                    $cryptFlag = TRUE;
                }else{
                    echo "no"."</br>";
                }
                
                if ($user == $tempUser && $cryptFlag == TRUE){
                    echo "yes User". "</br>";
                    //header("Location: loginSuccess.html");
                    //exit();
                }else{
                    echo "no". "</br>";
                }
                
            }        
        }
    }else{
        die("FATAL ERROR");
    }

    $conn->close();
?>
*/
    $today = date("2021-03-02");
    $tommorow = date("2021-03-02");

    if($today <= $tommorow){
        echo "yes";
    }else{
        echo "no";
    }







?>

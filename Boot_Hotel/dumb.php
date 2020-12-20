<?php
    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "SELECT HOTEL_IMG FROM HOTEL WHERE HOTEL_ID = 1";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['HOTEL_IMG']); ?>" /> 
        <?php }
    }else{
        die("FATAL ERROR");
    }
    
    $conn->close();
?>
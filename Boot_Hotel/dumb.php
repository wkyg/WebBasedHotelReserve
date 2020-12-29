<?php
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
?>
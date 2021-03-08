<?php
    $book_id = $_GET["book_id"];
   

    echo $book_id;

    $conn = mysqli_connect("localhost", "root", "", "hotel");

    if($conn){
        $sql = "UPDATE BOOKING SET STATUS = 'CHECKED_IN' WHERE BOOK_ID = '$book_id'";

        if(mysqli_query($conn, $sql)){
            echo "<script> alert('CHECKED IN')</script>";
            
        }else{
            echo "<script> alert('ERROR TRY AGAIN')</script>";
        }
        
    }else{
        die("FATAL ERROR");
    }
    $conn->close();
    header("location: manageCheck.php?book-id="."$book_id");
    exit();
?>
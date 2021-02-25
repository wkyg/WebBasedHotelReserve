<?php
    session_start();
    //session_unset();
    //session_destroy();

    $_SESSION["logged"] = FALSE;
    $_SESSION["user"] = "";
    $_SESSION["userID"] = "";
    $_SESSION["accType"] = "";

    header("location: index.php");
    exit();
?>
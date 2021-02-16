<?php
    session_start();
    //session_unset();
    //session_destroy();

    $_SESSION["logged"] = FALSE;
    $_SESSION["user"] = "";
    $_SESSION["userID"] = "";

    header("location: index.php");
    exit();
?>
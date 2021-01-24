<?php
    session_start();
    $search = $_GET["search"];
    $datein = $_GET["datein"];
    $dateout = $_GET["dateout"];
    $adults = $_GET["adults"];
    $children = $_GET["children"];
    $room = $_GET["room"];

    $id_search = $_GET["$id"];

    $_SESSION["search_result"] = $search;
    $_SESSION["datein_result"] = $datein;
    $_SESSION["dateout_result"] = $dateout;
    $_SESSION["adults_result"] = $adults;
    $_SESSION["children_result"] = $children;
    $_SESSION["room_result"] = $room;
?>
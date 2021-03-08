<?php
    require ("stripe-php/init.php");

    $publishableKey="pk_test_51INfGpBbrMJhIS6aWDvX8kf1KJTiazTEjXZjQBILh1yZcWh9t9E9jrfinN4ldSMjEZEeigvLV5szcXiu7BpBBApg00XSyFAud0";

    $secretKey="sk_test_51INfGpBbrMJhIS6a2myXzC41gkIoRVwg7ouZ9YeRxshszdtle9nb4wVo78DRsN7Bi1syTfuDAj84enR4Viy37HSU00fcDPyfP9";

    \Stripe\Stripe::setApiKey($secretKey);
?>
<?php
    require ("config.php");    
?>
<form action="submit.php" method="POST">
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publishableKey ?>"
        data-amount="50000000"
        data-name="Testing"
        $data-description="Testing for real"
        data-img=""
        data-currency="myr">
    </script>    
</form>
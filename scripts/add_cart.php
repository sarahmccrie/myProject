<?php
    require('../../../mysqli_connect.php');
    $product_id = $_POST['product_id'];
    $query = "UPDATE artitems SET carts = carts + 1 WHERE product_id = '$product_id'";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);  
?>
<script>
    alert("Thank you for your interest in buying this item! We hope the cart becomes available soon!");
    window.location.href = '<?php echo $_SERVER['HTTP_REFERER'] ?>';
</script>

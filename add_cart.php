<?php
    require('../mysqli_connect.php');
    $product_id = $_POST['product_id'];
    $query = "UPDATE artitems SET carts = carts + 1 WHERE product_id = '$product_id'";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);  
?>
<script>
    alert("Thank you for your interest in buying this item!");
    window.history.go(-1);
    window.location.reload(true);
</script>
<?php
    require('../../mysqli_connect.php');
    $product_id = $_POST['product_id'];
    $query = "UPDATE artitems SET likes = likes + 1 WHERE product_id = '$product_id'";
    mysqli_query($dbc, $query);
    mysqli_close($dbc);
?>
<script>
    alert("You've liked this item!");
    window.location.href = '<?php echo $_SERVER['HTTP_REFERER'] ?>';
</script>

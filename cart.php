<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <style>
        table{ width: 80%; margin: auto; border-collapse: collapse; }
        th, td{ padding: 12px; text-align: center; border: 1px solid #ddd; }
        th{ background: #222; color: #fff; }
        .btn-remove{ background: red; color: white; padding: 6px 12px; border: none; cursor: pointer; }
        .qty-box{ width: 50px; text-align: center; }
    </style>
</head>
<body>

<h2 style="text-align:center;">🛒 Your Shopping Cart</h2>

<?php
if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
?>

<table>
    <tr>
        <th>Product</th>
        <th>Price (₹)</th>
        <th>Quantity</th>
        <th>Total (₹)</th>
        <th>Action</th>
    </tr>

    <?php
    $grand_total = 0;
    foreach($_SESSION['cart'] as $key => $value){
        $total = $value['price'] * $value['Quantity'];
        $grand_total += $total;
    ?>
    <tr>
        <td><?php echo $value['product_name']; ?></td>
        <td><?php echo $value['price']; ?></td>

        <td>
            <form action="manage_cart.php" method="POST">
                <input type="number" name="Quantity" class="qty-box" value="<?php echo $value['Quantity']; ?>" min="1">
                <input type="hidden" name="product_name" value="<?php echo $value['product_name']; ?>">
                <button type="submit" name="Update_Quantity">Update</button>
            </form>
        </td>

        <td><?php echo $total; ?></td>

        <td>
            <form action="manage_cart.php" method="POST">
                <button class="btn-remove" name="Remove_Item">Remove</button>
                <input type="hidden" name="product_name" value="<?php echo $value['product_name']; ?>">
            </form>
        </td>
    </tr>
    <?php } ?>

    <tr>
        <td colspan="3"><strong>Grand Total</strong></td>
        <td><strong>₹ <?php echo $grand_total; ?></strong></td>
        <td></td>
    </tr>

    

</table>

<div style="text-align:center; margin-top:20px;">
    <a href="place_order.php">
        <button style="padding:12px 25px; background:#28a745; color:white; border:none; cursor:pointer; font-size:16px;">
            Proceed to Checkout
        </button>
    </a>
</div>


<?php 
} else {
    echo "<h3 style='text-align:center; color:red;'>Your Cart is Empty!</h3>";
}
?>

</body>
</html>

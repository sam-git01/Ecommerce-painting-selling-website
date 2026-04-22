<?php
include("connection.php");

$order_id = $_GET['order_id'];

// Fetch order details
$order = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders WHERE id='$order_id'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Placed Successfully</title>
    <style>
        body{ font-family: Arial; text-align:center; padding:40px; }
        .box{ background:#f1f1f1; padding:20px; width:60%; margin:auto; border-radius:8px; }
        .btn{
            background:#28a745; padding:12px 24px; color:white; text-decoration:none;
            border-radius:6px; margin-top:20px; display:inline-block;
        }
    </style>
</head>
<body>

<h2>🎉 Order Placed Successfully!</h2>
<div class="box">
    <h3>Order ID: #<?php echo $order['id']; ?></h3>
    <p><strong>Name:</strong> <?php echo $order['customer_name']; ?></p>
    <p><strong>Email:</strong> <?php echo $order['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $order['phone']; ?></p>
    <p><strong>Total Amount:</strong> ₹ <?php echo $order['total_amount']; ?></p>

    <a href="index.php" class="btn">Back to Home</a>
</div>

</body>
</html>

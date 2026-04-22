<?php
session_start();
include("connection.php");


// Get the order ID from the URL (e.g., confirmation.php?order_id=123)
$order_id = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;

$order_details = null;
$item_details = [];

if ($order_id > 0) {
    // Create connection
   include("connection.php");

    // --- Fetch Main Order Details ---
    $sql_order = "SELECT * FROM orders WHERE id = $order_id";
    $result_order = $con->query($sql_order);
    
    if ($result_order && $result_order->num_rows > 0) {
        $order_details = $result_order->fetch_assoc();

        // --- Fetch Order Items ---
        $sql_items = "SELECT product_name, price, quantity, total FROM order_items WHERE order_id = $order_id";
        $result_items = $con->query($sql_items);
        
        if ($result_items) {
            while ($row = $result_items->fetch_assoc()) {
                $item_details[] = $row;
            }
        }
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmed!</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #e9f7ef; padding: 20px; }
        .container { max-width: 800px; margin: 30px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 15px rgba(0, 128, 0, 0.2); }
        h1 { text-align: center; color: #28a745; border-bottom: 2px solid #28a745; padding-bottom: 10px; }
        .success-message { text-align: center; margin-bottom: 25px; font-size: 1.2em; }
        .summary-box { border: 1px solid #ccc; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .summary-box p { margin: 5px 0; }
        .summary-box strong { display: inline-block; width: 150px; }
        .table-items { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .table-items th, .table-items td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        .table-items th { background-color: #f2f2f2; }
        .total-row td { font-weight: bold; background-color: #e2f0e8; }
        .back-link { text-align: center; margin-top: 30px; }
    </style>
</head>
<body>

<div class="container">
    
    <?php if ($order_details): ?>
        
        <h1>✅ Order Confirmation!</h1>
        
        <div class="success-message">
            Thank you for your order! Your order has been successfully placed.
        </div>
        
        <h2>Order Summary</h2>
        <div class="summary-box">
            <p><strong>Order ID:</strong> #<?php echo htmlspecialchars($order_details['id']); ?></p>
            <p><strong>Order Date:</strong> <?php echo date('F j, Y, g:i a', strtotime($order_details['order_date'])); ?></p>
            <p><strong>Customer Name:</strong> <?php echo htmlspecialchars($order_details['customer_name']); ?></p>
            <p><strong>Shipping Address:</strong> <?php echo nl2br(htmlspecialchars($order_details['shipping_address'])); ?></p>
            <p><strong>Payment Method:</strong> <?php echo htmlspecialchars($order_details['payment_method']); ?></p>
            <p><strong>Current Status:</strong> <span style="color: blue;"><?php echo htmlspecialchars($order_details['order_status']); ?></span></p>
        </div>

        <h2>Items Ordered</h2>
        <table class="table-items">
            <tr>
                <th>Product</th>
                <th>Price (₹)</th>
                <th>Quantity</th>
                <th>Total (₹)</th>
            </tr>
            <?php foreach ($item_details as $item): ?>
            <tr>
                <td><?php echo htmlspecialchars($item['product_name']); ?></td>
                <td><?php echo number_format($item['price'], 2); ?></td>
                <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                <td><?php echo number_format($item['total'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr class="total-row">
                <td colspan="3" style="text-align: right;">Grand Total:</td>
                <td>₹ <?php echo number_format($order_details['total_amount'], 2); ?></td>
            </tr>
        </table>
        
    <?php else: ?>
        
        <h1>⚠️ Order Not Found</h1>
        <p class="success-message" style="color: red;">
            We could not find the order details. Please ensure the link is correct.
        </p>
        
    <?php endif; ?>

    <div class="back-link">
        <a href="index.php">Continue Shopping</a>
    </div>

</div>

</body>
</html>
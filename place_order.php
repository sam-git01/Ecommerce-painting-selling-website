<?php
session_start();

// Redirect if cart is empty
if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0){
    header('location: view_cart.php'); // Assuming the cart display page is view_cart.php
    exit();
}

// Calculate the Grand Total for display and submission
$grand_total = 0;
foreach($_SESSION['cart'] as $item){
    $grand_total += $item['price'] * $item['Quantity'];
}

// Prepare cart items data to be saved (e.g., in a JSON format)
$order_items_json = json_encode($_SESSION['cart']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 600px; margin: 30px auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; }
        .total-summary { text-align: center; margin-bottom: 20px; padding: 15px; background: #e9ecef; border-radius: 4px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="email"], input[type="tel"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Important for padding/border within width */
        }
        textarea { resize: vertical; }
        .btn-submit {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 10px;
        }
        .btn-submit:hover { background-color: #0056b3; }
    </style>
</head>
<body>

<div class="container">
    <h2>🚚 Customer Information</h2>

    <div class="total-summary">
        <h3>Order Total: ₹ <?php echo number_format($grand_total, 2); ?></h3>
    </div>

    <form action="process_order.php" method="POST">

        <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">
        <input type="hidden" name="order_items" value="<?php echo htmlspecialchars($order_items_json); ?>">


        <div class="form-group">
            <label for="name">Full Name *</label>
            <input type="text" id="name" name="customer_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address *</label>
            <input type="email" id="email" name="customer_email" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number *</label>
            <input type="tel" id="phone" name="customer_phone" required>
        </div>

        <div class="form-group">
            <label for="address">Shipping Address *</label>
            <textarea id="address" name="shipping_address" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="payment_method">Payment Method *</label>
            <select id="payment_method" name="payment_method" required>
                <option value="">-- Select Payment Method --</option>
                <option value="COD">Cash On Delivery (COD)</option>
                <option value="Card">Credit/Debit Card</option>
                <option value="NetBanking">Net Banking</option>
            </select>
        </div>

        <button type="submit" name="place_order" class="btn-submit">
            Place Order Now
        </button>
    </form>
</div>

</body>
</html>
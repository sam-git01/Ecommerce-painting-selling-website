<?php
session_start();
include("connection.php");

// --- 2. Check for form submission and validate cart ---
if (isset($_POST['place_order']) && isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    
    // --- 3. Sanitize and collect customer data ---
    $name = $con->real_escape_string($_POST['customer_name']);
    $email = $con->real_escape_string($_POST['customer_email']);
    $phone = $con->real_escape_string($_POST['customer_phone']);
    $address = $con->real_escape_string($_POST['shipping_address']);
    $payment_method = $con->real_escape_string($_POST['payment_method']);
    
    // Collect order details (hidden fields)
    $grand_total = $_POST['grand_total']; // Numeric data might not need escaping but should be cast/validated
    $order_items_json = $_POST['order_items'];
    $order_items_array = json_decode($order_items_json, true); // Convert JSON back to a PHP array

    $order_date = date('Y-m-d H:i:s');
    $order_status = 'Pending'; // Initial status

    // --- 4. Insert the Main Order Record ---
    // Assuming you have a table named 'orders'
    $sql_order = "INSERT INTO orders (customer_name, customer_email, customer_phone, shipping_address, total_amount, payment_method, order_date, order_status) 
                  VALUES ('$name', '$email', '$phone', '$address', '$grand_total', '$payment_method', '$order_date', '$order_status')";

    if ($con->query($sql_order) === TRUE) {
        
        // Get the ID of the newly created order
        $order_id = $con->insert_id;

        // --- 5. Insert Individual Order Items (Loop through the cart) ---
        // Assuming you have a table named 'order_items'
        
        $insert_item_success = true;
        
        foreach ($order_items_array as $item) {
            $product_name = $con->real_escape_string($item['product_name']);
            $price = $item['price'];
            $quantity = $item['Quantity'];
            $total_price = $price * $quantity;

            $sql_item = "INSERT INTO order_items (order_id, product_name, price, quantity, total) 
                         VALUES ('$order_id', '$product_name', '$price', '$quantity', '$total_price')";
            
            if ($con->query($sql_item) !== TRUE) {
                // If an item fails to insert, set flag and optionally roll back the main order
                $insert_item_success = false;
                // In a real application, you'd log the error and handle transaction rollback here.
                break; 
            }
        }

        // --- 6. Final Steps: Clear cart and redirect to confirmation ---
        if ($insert_item_success) {
            unset($_SESSION['cart']); // Clear the cart session
            
            // Redirect to a confirmation page
            header("location: confirmation.php?order_id=" . $order_id);
            exit();

        } else {
            echo "Error placing individual items. Please contact support.";
            // Consider deleting the main order record inserted in step 4 here to prevent orphaned data.
        }
        
    } else {
        echo "Error placing order: " . $con->error;
    }

} else {
    // If they landed here without a form submission or an empty cart
    echo "Invalid request or empty cart.";
}

$con->close();
?>
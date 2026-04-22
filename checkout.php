<form action="place_order.php" method="POST">

    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <textarea name="address" placeholder="Address" required></textarea><br>

    <input type="hidden" name="grand_total" value="<?php echo $grand_total; ?>">

    <button type="submit" name="place_order">Place Order</button>
</form>

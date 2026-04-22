<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){

    // ADD TO CART
    if(isset($_POST['Add_To_Cart'])){
        
        if(isset($_SESSION['cart'])){
            $product_names = array_column($_SESSION['cart'], 'product_name');

            if(in_array($_POST['product_name'], $product_names)){
                echo "<script>alert('Product already in cart'); window.location.href='home.php';</script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array(
                    'product_name' => $_POST['product_name'],
                    'price' => $_POST['price'],
                    'Quantity' => 1
                );
                header("Location: cart.php");
            }
        }
        else{
            $_SESSION['cart'][0] = array(
                'product_name' => $_POST['product_name'],
                'price' => $_POST['price'],
                'Quantity' => 1
            );
            header("Location: cart.php");
        }
    }


    // REMOVE ITEM
    if(isset($_POST['Remove_Item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_name'] == $_POST['product_name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); 
                header("Location: cart.php");
            }
        }
    }

    // UPDATE QUANTITY
    if(isset($_POST['Update_Quantity'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['product_name'] == $_POST['product_name']){
                $_SESSION['cart'][$key]['Quantity'] = $_POST['Quantity'];
                header("Location: cart.php");
            }
        }
    }
}
?>

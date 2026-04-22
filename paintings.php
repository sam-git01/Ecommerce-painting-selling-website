<?php

  session_start();
  include("connection.php");

  $sql = "SELECT * FROM products";
  $all_product = $con->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtComish</title>

    <link rel="stylesheet" href="paintings.css">

    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/cb31bfb0c6.js" crossorigin="anonymous"></script>
    <link rel="icon" href="ASSETS/favicon.png" type="x-icon">
    
</head>
<body>
<!-- Navbar Section -->
   <?php include('inc/nav.php') ?>
   



<!--Painting page Open-->
    <div class="product-banner2"></div>


<!--Painting catogory-->
    <section class="category-1">

        <div class="cat-container">
            <h3 id="cat-title">Paintings</h3>
        </div>

        <div class="pro-container">

        <?php
            while($row = mysqli_fetch_assoc($all_product)){
        ?>
        <form action="manage_cart.php" method="POST">
    <div class="product">
        <img src="<?php echo $row["product_image"]; ?>" alt="">
        <div class="product-des">
            <span><?php echo $row["artist_name"]; ?></span>
            <h5 class="product_name"><?php echo $row["product_name"]; ?></h5>
            <div>
                <h4 class="price">₹ <?php echo $row["price"]; ?></h4>
            </div>
        </div>

        <!-- ADD THESE HIDDEN INPUTS -->
        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

        <button type="submit" name="Add_To_Cart">Add To Cart</button>
    </div>
</form>

            
             
        <?php
          }
      ?>
        </div>     
    </section>

<!--Drawing catogory-->
     <section class="category-2">

        <div class="cat-container">
            <h3 id="cat-title">Drawing</h3>
        </div>

        <div class="pro-container">

        <?php
            while($row = mysqli_fetch_assoc($all_product)){
        ?>

            <div class="product">
                <img src="<?php echo $row["product_image"]; ?>" alt="">
                <div class="product-des">
                    <span><?php echo $row["artist_name"]; ?></span>
                    <h5 class="product_name"><?php echo $row["product_name"]; ?></h5>
                    <div>
                        <h4 class="price">₹ <?php echo $row["price"]; ?></h4>
                    </div>
                </div>
                <button>Buy Now</button>
            </div>
             
        <?php
          }
      ?>
        </div>     
    </section>


<!--Handmades catogory-->
     <section class="category-1">

        <div class="cat-container">
            <h3 id="cat-title">Digital Art</h3>
        </div>

        <div class="pro-container">

        <?php
            while($row = mysqli_fetch_assoc($all_product)){
        ?>

            <div class="product">
                <img src="<?php echo $row["product_image"]; ?>" alt="">
                <div class="product-des">
                    <span><?php echo $row["artist_name"]; ?></span>
                    <h5 class="product_name"><?php echo $row["product_name"]; ?></h5>
                    <div>
                        <h4 class="price">₹ <?php echo $row["price"]; ?></h4>
                    </div>
                </div>
                <button>Buy Now</button>
            </div>
             
        <?php
          }
      ?>
        </div>     
    </section>

<!-- Footer Section -->
    <?php include('inc/footer.php') ?>



</body>
</html>
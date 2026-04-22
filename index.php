<?php

  session_start();
  include("connection.php");

  $sql = "SELECT * FROM products";
  $all_product = $con->query($sql);

?>

 <?php include('inc/header.php') ?>

<body>

   <?php include('inc/nav.php') ?>
   


 <!--  home page  Start  ---->
    <section class="hero-section">
        <div id="hero">
            <h2>Buy Art Online</h2>
            <span>Hang It Offline...</span>
            <p>"From Canvas to Your Home" <br>Elevate Your Walls with Just a Click.</p>
            <div>
                <a href="paintings.php" class="hero-btn">Explore ></a>
            </div>
        </div>
    </section>


<!--    Gallery    -->   
    <div class="container-gallery">
        <div class="left-text">
            <h2 class="heading">ArtComish</h2>
            <p class="subheading">Explore our collection of 100% hand-painted artworks, crafted with exceptional detail by talented artists. Every piece is quality-checked and verified by ArtComish to ensure authenticity. With a wide range of categories, you're sure to find the perfect art for any space.</p>
            <button id="know-more">Know more</button>
            
        </div>
         

        <div class="gallery">
            <div class="box col-2 row-2" style="background-image: url(img/gallery1.webp);">Lord-Buddha</div>
            <div class="box row-2" style="background-image: url(img/gallery2.webp);">Hans</div>
            <div class="box row-2" style="background-image: url(https://c8.alamy.com/comp/DXC993/tagore-hill-top-ranchi-jharkhand-india-DXC993.jpg);">Ranchi</div>
            <div class="box row-2" style="background-image: url(img/gallery4.webp);">firayalal</div>
            <div class="box row-2" style="background-image: url(img/gallery7.webp);">Drawing</div>
            <div class="box row-2" style="background-image: url(img/gallery5.webp);">Shivalinga</div>
            <div class="box col-2 row-2" style="background-image: url(img/gallery6..jpg);">Three-Horses</div>
        </div>
    </div>

    <section>
        <div class="product-banner1"></div>
    </section>
   
      
 <!--   Original paintings   -->

     <section class="category-1">

        <div class="cat-container">
            <h3 id="cat-title">Original paingtings</h3>
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

<!-- Featured Section -->

    <div  class="featured-section">
        
        <div class="cat-container">
            <h3 id="cat-title">Our Featured Artists</h3>
        </div>
        
    </div>

    <div class="container">
            <div class="content">

                <div class="card">
                    <div class="card-content">
                        <div class="art-profile">
                            <img src="ASSETS\artist1.jpg" alt="">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sam Prajapati</span>
                            <span class="profession">Sketch Artist</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <div class="card-btn">
                            <button class="profile">Visit Profile</button>
                            <button class="Commission">Commission Work</button>
                        </div>
                    </div>
                </div>

                 <div class="card">
                    <div class="card-content">
                        <div class="art-profile">
                            <img src="ASSETS\artist2.jpg" alt="">
                        </div>

                        <div class="name-profession">
                            <span class="name">Parmanand Prasad</span>
                            <span class="profession">Sketch Artist</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <div class="card-btn">
                            <button class="profile">Visit Profile</button>
                            <button class="Commission">Commission Work</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="art-profile">
                            <img src="ASSETS/artist3.jpg" alt="">
                        </div>

                        <div class="name-profession">
                            <span class="name">Sourav Verma</span>
                            <span class="profession">Painter</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <div class="card-btn">
                            <button class="profile">Visit Profile</button>
                            <button class="Commission">Commission Work</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="art-profile">
                            <img src="ASSETS/artist4.jpg" alt="">
                        </div>

                        <div class="name-profession">
                            <span class="name">Tanvir Alam</span>
                            <span class="profession">Sketch Artist</span>
                        </div>

                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <div class="card-btn">
                            <button class="profile">Visit Profile</button>
                            <button class="Commission">Commission Work</button>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    <div class="moreartist-btn">
        <a href="artists.php">
            <button id="moreartist-btn">More Artists</button>
        </a>
    </div>

      <!-- Footer Section -->
    <?php include('inc/footer.php') ?>

 <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu(){
        subMenu.classList.toggle("open-menu")
    }
 </script>
        
</body>
</html>

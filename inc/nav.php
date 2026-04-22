 <!-- Navbar Section -->
 <style>
    section {
    padding: 1rem 5%;
}
header{
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 30px;
    transition: 0.5s linear;
    background-color: #8b61c2;
    color: white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.6);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}

.nav-logo {
    height: 40px;
    width: 60px;
    cursor: pointer;
}

.logo {
    background-image: url("ASSETS/logo.png");
    background-size: cover;
    height: 40px;
    width: 60px;
}

.navbar{
    display: flex;
    column-gap: 2.4rem;
    list-style: none;
}
.navbar a{
    font-size: 1rem;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
}

.navbar a:hover {
    color: rgb(149, 241, 204);
}

.master-icons{
    display: flex;
    column-gap: 2.4rem;
}


.search-box {
    height: 30px;
    display: flex;
    cursor: pointer;
    padding: 10px 20px;
    background-color: #fff;
    border-radius: 30px;
    align-items: center;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
}

.search-box:hover input {
   width: 300px; 
}

.search-box input {
    width: 0;
    outline: none;
    border: none;
    font-weight: 500;
    transition: 0.8s;
    background-color: transparent;
}

.search-box #search-icon {
    color: black;
    font-size: 18px;
}

#menu-icon{
    display: none;
    color: #fff;
}

#user-icon{
    color: #fff;
    font-size: 22px;
    padding-top: 5px;
}
#user-icon:hover{
    color: rgb(149, 241, 204);
}

#cart-icon{
    color: #fff;
    font-size: 22px;
    padding-top: 5px;
}

#cart-icon:hover{
    color: rgb(149, 241, 204);
}

.shopingCart{
    position: relative;
}

.shopingCart .quantity{
    background-color: #c64631;
    color: #fff;
    border-radius: 50%;
    padding: 0 8px;
    position: absolute;
    top: -10px;
    left: 13px;
}
 </style>   
 
 <header>
        <div class="nav-logo">
            <div class="logo"></div>
        </div>

        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="paintings.php">All Artworks</a></li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="customart.php">Custom Art</a></li>
        </ul>

    <!--Header Icons-->
       <!-- Search Box -->
        <div class="master-icons">
            <div class="search-box">
                <input type="search" placeholder="Search Here...">

                <a href="#">
                   <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
                </a>
            </div>
            <i class="fa-solid fa-bars" id="menu-icon"></i>

            <a href="Login/login.php">
                <i class="fa-solid fa-user" id="user-icon"></i>
            </a>

            <div class="shopingCart">
                <a id="openCartBtn" href="cart.php">
                <i  class="fa-solid fa-cart-shopping" id="cart-icon"></i>
                <span class="quantity">0</span>
                </a>
            </div>
            
        </div>
        
    </header>
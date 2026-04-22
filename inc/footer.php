<style>
    /*------Footer section-------*/
footer{
    background-color: #8b61c2;
    text-align: center;
    padding: 30px;
    color: #fff;
}

.footer-top{
    width: 60%;
    margin: auto;
}

.footer-top img{
    height: 100px;
    width: 150px;
    object-fit: cover;
}

.footer-social-container{
    display: flex;
    justify-content: space-between;
    padding: 20px;
}

.footer-social{
    display: flex;
    place-items: center;
    font-size: 30px;
    cursor: pointer;
}

.footer-social span{
    margin-left: 10px;
    font-size: 16px;
}

.footer-bottom{
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: auto;
    border-top: 1px solid #eae5e5;
    padding-top: 20px;
}

.footer-bottom ul{
    display: flex;
    list-style: none;
    cursor: pointer;
}

.footer-bottom a{
    text-decoration: none;
    margin-left: 20px;
    color: #fff;
}

.footer-bottom #heart{
    color: #c64631;
}
</style>


<!-- Footer Section -->

    <footer>
        <div class="footer-top">
            <img src="ASSETS/logo.png" alt="">
            <div class="footer-social-container">
                <div class="footer-social">
                    <i class="fa-solid fa-phone"></i>
                    <span>012 345 6789</span> 
                </div>
                <div class="footer-social">
                    <i class="fa-brands fa-telegram"></i>
                    <span>Telegram</span> 
                </div>
                <div class="footer-social">
                    <i class="fa-brands fa-x-twitter"></i>
                    <span>Twitter</span> 
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="paintings.php">Paintings</a>
                </li>
                <li>
                    <a href="artists.php">Artists</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="customart.php">Custom Art</a>
                </li>
            </ul>
            <p>
                &copy;Copyright 2025 <span>ArtComish</span>. All rights reserved. Made with <i class="fas fa-heart" id="heart"></i> by Sam.
            </p>
        </div>
    </footer>
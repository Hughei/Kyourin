<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

</head>
<body >
    <div id="page" class="site">
        <header>
            <div class="container">
                <nav>
                    <div class="left">
                        <div class="logo"><a href="#">Kyourin</a></div>
                        <div class="menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="categories.php">Category</a></li>
                                <li><a href="favorites.php">Favorites</a></li>
                                <li><a href="Login/register.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="icons">
                            <a href="#" class="s-trigger">
                                <i class="ri-search-line"></i>
                                <i class="ri-close-line"></i>
                            </a>
                            <a href="#" class="m-trigger mobile-only">
                                <i class="ri-menu-line"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <form action="" class="search">
                <div class="container">
                    <input type="search" placeholder="Seart to eat...">
                </div>
            </form>
        </header>
        <main>
            <div class="hero">
                <div class="container">
                    <h1>Discover and start your burning passion for cooking!</h1>
                    <span class="text">Our featured anime food recipes:</span>                   
                    <div class="slider">
<!--================================BIG PICTURES FEATURED RECIPES================================-->                         
                        <div class="thumb-big swiper">
                            <div class="wapper swiper-wrapper">
                                <div class="item swiper-slide">
                                    <div class="main">

                                        <div class="tags link-slide">
                                            <span>Howl's Breakfast</span>
                                            <a href="recipes/food-7.php">View Recipe</a>
                                        </div>

                                        <div class="image"> <img src="assets/slider/food1.png" alt=""></div>

                                    </div>
                                </div>

                                <div class="item swiper-slide">
                                    <div class="main">
                                        
                                        <div class="tags link-slide">
                                            <span>Ichiraku Ramen</span>
                                            <a href="recipes/food-4.php">View Recipe</a>
                                        </div>

                                        <div class="image"> <img src="assets/slider/food2.png" alt=""></div>
                                    </div>
                                </div>


                                <div class="item swiper-slide">
                                    <div class="main">

                                        <div class="tags link-slide">
                                            <span>Steamed Red Bean Bun</span>
                                            <a href="recipes/food-2.php">View Recipe</a>
                                        </div>

                                        <div class="image"> <img src="assets/slider/food3.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
<!--================================BIG PICTURES FEATURED RECIPES================================-->

<!--================================SMALL PICTURES FEATURED RECIPES LOWER RIGHT SIDE================================-->
                        <div thumbSlider="" class="thumb-nav swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide">
                                    <div class="item">
                                        <h4>Howl's Breakfast <br><span>Howl's Moving Castle</span></h4>
                                        <div class="thumbnail">
                                            <img src="assets/slider/food1.png" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide">
                                    <div class="item">
                                        <h4>Ichiraku Ramen <br><span>Naruto</span></h4>
                                        <div class="thumbnail">
                                            <img src="assets/slider/food2.png" alt="">
                                        </div>
                                    </div>
                                </li>                            
                                <li class="swiper-slide">
                                    <div class="item">
                                        <h4>Steamed Red Bean Bun <br><span>Spirited Away</span></h4>
                                        <div class="thumbnail">
                                            <img src="assets/slider/food3.png" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
<!--================================SMALL PICTURES FEATURED RECIPES LOWER RIGHT SIDE================================-->

                    </div>
                </div>
                <div class="bg-primary"></div>
            </div>
           
            <!--DON'T REMOVE THIS-->
            <div class="categories">
                <div class="bg-primaryMid"></div>
            </div>
            <!--DON'T REMOVE THIS-->

<!--==========================================CATEGORIES MAIN PAGE==========================================-->
        
            <div class="tabbed has-bg">
                <div class="containerCat">
                    <div class="head-brief up animate">
                        <h3>Our Food Categories</h3>
                        <p>Here are the collection of food anime recipes we discovered for you to enjoy!</p>
                    </div>

                    <nav class="tnav link-slide swiper">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide"><a href="#0">Main Dish</a></li>
                            <li class="swiper-slide"><a href="#0">Ramen</a></li>
                            <li class="swiper-slide"><a href="#0">Snacks</a></li>
                            
                        </ul>
                    </nav>

                    <div class="tabbed-item swiper">
                        <div class="products swiper-wrapper">

<!-- =============================================CATEGORIES CONTENTS============================================= -->
                            <!-- MAIN DISH -->
                            <div class="item swiper-slide">
                                <ul>
                                    <li>
                                        <div class="thumbnail covering">
                                            <a href="#">
                                                <img src="assets/products/baked1.jpg" alt="">
                                            </a>
                                        </div>
                                        
                                    </li>
                                   
                                </ul>
                            </div>
                            <!-- MAIN DISH -->

                            <!-- RAMEN -->
                            <div class="item swiper-slide">
                                <ul>
                                    <li>
                                        <div class="thumbnail covering">
                                            <a href="#">
                                                <img src="assets/products/baked7.jpg" alt="">
                                            </a>
                                        </div>                                        
                                    </li>

                                    
                                </ul>
                            </div>
                            <!-- RAMEN -->

                             <!-- SNACKS -->
                             <div class="item swiper-slide">
                                <ul>
                                    
                                    <li>
                                        <div class="thumbnail covering">
                                            <a href="#">
                                                <img src="assets/products/garnish1.jpg" alt="">
                                            </a>
                                        </div>                                        
                                    </li>
                                </ul>
                            </div>
                            <!-- SNACKS -->

<!-- =============================================CATEGORIES CONTENTS============================================= -->

                        </div>
                    </div>


                </div>
            </div>
        
<!--==========================================CATEGORIES MAIN PAGE==========================================-->
           
            <!-- masterpiece -->
            <div class="masterpiece has-bg">
                <div class="bg-dark"></div>
                <div class="container">
                    <div class="head-brief up animate">
                        <h3>About us na ito</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                        <div class="wrapper">
                            <div class="item up animate">
                                <div class="image left animate">
                                    <img src="assets/slider/food3.png" alt="">
                                </div>
                                <div class="text right animate">
                                    <h2>The Salad</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Animi, architecto eius? Quia vel adipisci in, magnam neque deserunt repellendus ut 
                                        similique praesentium laudantium voluptatum, corporis non suscipit. Ratione, fugit provident.</p>
                                </div>
                            </div>

                            <div class="item up animate">
                                <div class="image right animate">
                                    <img src="assets/slider/food4.png" alt="">
                                </div>
                                <div class="text left animate">
                                    <h2>The Salad</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Animi, architecto eius? Quia vel adipisci in, magnam neque deserunt repellendus ut 
                                        similique praesentium laudantium voluptatum, corporis non suscipit. Ratione, fugit provident.</p>
                                </div>
                            </div>

                            <div class="item up animate">
                                <div class="image left animate">
                                    <img src="assets/slider/food6.png" alt="">
                                </div>
                                <div class="text right animate">
                                    <h2>The Salad</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Animi, architecto eius? Quia vel adipisci in, magnam neque deserunt repellendus ut 
                                        similique praesentium laudantium voluptatum, corporis non suscipit. Ratione, fugit provident.</p>
                                </div>
                            </div>

                            
                        </div>
                </div>
            </div>
            <!-- masterpiece -->

            <div class="formblog has-bg">
                <div class="bg-primary-dark"></div>
                <div class="container">
                    <div class="head-brief">
                       
                    </div>
                    
                </div>
            </div>
            <!-- formblog -->
        </main>
        <footer>
            <div class="container">
                <div class="wrapper">
                    <div class="widget-footer">
                        <h4>Discover</h4>
                        <ul>
                            <li><a href="../index.php">Homepage</a></li>
                            <li><a href="../about.php">About Us</a></li>
                            <li><a href="../categories.php">Category</a></li>                            
                            <li><a href="../favorites.php">Favorites</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                       
                    </div>
                    <div class="widget-footer">
                        <div class="logo"><a href="#">Kyourin</a></div>
                        <p>Kyourin is not just about recipes; it's about cultural appreciation and exploration. </p>
                        <p>And providing users an opportunity to experience food from animes. </p>
                        <ul class="socials">
                            <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                            <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                            <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">c 2023 KYOURIN All Reserved</p>
            </div>
        </footer>
    </div>
    <div class="overlay"></div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
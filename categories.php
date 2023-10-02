<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Food Website</title>
    <link rel="stylesheet" href="stylecat.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="simplelightbox-master/dist/simple-lightbox.css">

</head>
<body class="bg-body">
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
            <div class="tabbed has-bg">
                <div class="container">
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
                                    <div class="containerProdsCat ">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked1.jpg">                                                
                                                <img src="assets/products/baked1.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Food Wars</a></span>
                                                <span class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <span>4.9</span>
                                                </span>                                                    
                                            </div>
                                            
                                            <h2><a href="#"></a>Furikake Rice</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-1.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton1" dishName="Furikake Rice"></i>                                                    
                                                </a>                                            
                                          </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked2.jpg">                                                
                                                <img src="assets/products/baked2.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Howl’s Moving Castle</a></span>
                                                                                                
                                            </div>
                                            <h2><a href="#"></a>Howl’s Breakfast</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-7.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton2" dishName="Howl’s Breakfast"></i>                                                    
                                                </a>            
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                                
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked3.jpg">                                                
                                                <img src="assets/products/baked3.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Yuri!!! on ICE</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Pork Katsudon</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-9.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton3" dishName="Pork Katsudon"></i>                                                    
                                                </a>    
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                              
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked4.jpg">                                                
                                                <img src="assets/products/baked4.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Beastars </a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Yakisoba</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-12.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton4" dishName="Yakisoba"></i>                                                    
                                                </a>    
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                            
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked5.jpg">                                                
                                                <img src="assets/products/baked5.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Food Wars</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Curry “Risotto” Omurice</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-1.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton5" dishName="Curry “Risotto” Omurice"></i>                                                    
                                                </a>    
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                           
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-1" href="assets/products/baked6.jpg">                                                
                                                <img src="assets/products/baked6.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">One Piece</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a> Chicken Drumsticks</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-1.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton6" dishName="Chicken Drumsticks"></i>                                                    
                                                </a>     
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                
                                   
                                </ul>
                            </div>
                            <!-- MAIN DISH -->

                            <!-- RAMEN -->
                            <div class="item swiper-slide">
                                <ul>
                                    <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-2" href="assets/products/baked7.jpg">                                                
                                                <img src="assets/products/baked7.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Ponyo</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Ham Ramen</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-3.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton7" dishName="Ham Ramen"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-2" href="assets/products/baked8.jpg">                                                
                                                <img src="assets/products/baked8.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Ichiraku Ramen</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Ichiraku Ramen</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-4.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton8" dishName="Ichiraku Ramen"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-2" href="assets/products/baked9.jpg">                                                
                                                <img src="assets/products/baked9.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Dr. stone</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Foxtail Millet Ramen</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-3.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton9" dishName="Foxtail Millet Ramen"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                    
                                </ul>
                            </div>
                            <!-- RAMEN -->

                             <!-- SNACKS -->
                             <div class="item swiper-slide">
                                <ul>

                                    <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish1.jpg">                                                
                                                <img src="assets/products/garnish1.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Spirited Away</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Steamed Red Bean Bun</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-2.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton10" dishName="Steamed Red Bean Bun"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>
                                
                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish2.jpg">                                                
                                                <img src="assets/products/garnish2.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Demon Slayer</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Sakura Mochi</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-5.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton11" dishName="Sakura Mochi"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish3.jpg">                                                
                                                <img src="assets/products/garnish3.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Doraemon</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Dorayaki</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-6.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton12" dishName="Dorayaki"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish4.jpg">                                                
                                                <img src="assets/products/garnish4.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Black Butler</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Chocolate Curry Buns</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-8.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton13" dishName="Chocolate Curry Buns"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                    
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish5.jpg">                                                
                                                <img src="assets/products/garnish5.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Charlotte</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Katsu Sandwich</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-10.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton14" dishName="Katsu Sandwich"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>

                                <div class="containerProdsCat">                  
                                    <li>
                                        <div class="thumbnail covering">
                                            <a class="gal-3" href="assets/products/garnish6.jpg">                                                
                                                <img src="assets/products/garnish6.jpg" alt="gallery image">                                                                                                     
                                            </a>
                                        </div>
                                        <div class="meta">
                                            <div class="caterate">
                                                <span class="cat"><a href="#">Demon Slayer</a></span>                                                
                                            </div>
                                            <h2><a href="#"></a>Mitarashi dango</h2>                                            
                                            <div class="buttons">
                                                <a href="recipes/food-11.html"><button class="catBtn">View Recipe</button></a>
                                                <a class="like">
                                                    <i class="ri-heart-line addFav" id="toggleButton15" dishName="Mitarashi dango"></i>                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </div>


                                </ul>
                            </div>
                            <!-- SNACKS -->

<!-- =============================================CATEGORIES CONTENTS============================================= -->

                        </div>
                    </div>


                </div>
            </div>
            <div class="bg-primary"></div>
            </div>
            <!-- tabbed products -->

            <div class="formblog has-bg">
                <div class="bg-primary2"></div>
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
                            <li><a href="../index.html">Homepage</a></li>
                            <li><a href="../about.html">About Us</a></li>
                            <li><a href="../categories.html">Category</a></li>                            
                            <li><a href="../favorites.html">Favorites</a></li>
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

    <script src="favesBtn.js"></script>
    <script src="simplelightbox-master/dist/simple-lightbox.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $(document).on('click', '.addFav', function(e) {
                // alert($(this).attr('dishName'));
                dishName = $(this).attr('dishName');
                $.ajax({
                    type: "POST",
                    url: "Dishes.php",
                    data: {
                        "action": "addToFavorites",
                        "id": $(this).attr('id'),
                        "name": $(this).attr('dishName')
                    },
                    success: function (resp) {
                        if(resp == 'added') {
                            alert(dishName + " Successfully added to favorites!");
                        } else {
                            alert(dishName + " Successfully removed from favorites!");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
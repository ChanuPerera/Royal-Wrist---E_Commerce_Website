<?php session_start(); ?>
<!DOCTYPE html>
<!-- IT21702372 W.C.I.PERERA-->
<html>
    <head>

            <title>Royal Wrist</title>
            <link rel="shortcut icon" href="asserts/logo.png" /> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <!-- CDN LIBS --> 
            <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">    
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    </head>
            


    <body>
        
        <?php

            if(!isset($_SESSION['userName']))
            {
                include("headerfile.html");
            }
            else
                include("headerfile2.html");
            
                

        ?>
       

        <!--HEADER starts-->

        <!-- <section class="header">

            <a href="home.html" class="logo">Royal Wrist</a>


            <nav class="navbar">
                <a href="home.html">Home</a>
                <a href="product.php">Products</a>
                <a href="about.html">About</a>
                <a href="cart.php">My Cart</a>
                <a href="log.php">Login</a>
                
            </nav>  -->

            <!--Menu Button-->
            <!-- <div id="menu-btn" class="fas fa-bars"></div>
        </section>   -->

        <!--HEADER ends -->



        <!--Home sec starts-->
        <section class="home">
            <div class="swiper home-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slides" style="background:url(asserts/slide1.jpg) no-repeat"  >
                        <div class="content">
                            <span>Browse, Order, Share</span>
                            <h3>Be Royal in your Own Fashion</h3>
                            <a href="product.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slides" style="background:url(asserts/slide2.jpg) no-repeat"  >
                        <div class="content">
                            <span>Browse, Order, Share</span>
                            <h3>You can wear it at any age</h3>
                            <a href="product.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slides" style="background:url(asserts/slide3.jpg) no-repeat"  >
                        <div class="content">
                            <span>Browse, Order, Share</span>
                            <h3>Buy less. Choose well. Make it last. Quality, not quantity</h3>
                            <a href="product.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slides" style="background:url(asserts/slide4.jpg) no-repeat"  >
                        <div class="content">
                            <span>Browse, Order, Share</span>
                            <h3>Wear it with confidence.</h3>
                            <a href="product.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    <div class="swiper-slide slides" style="background:url(asserts/slide5.jpg) no-repeat"  >
                        <div class="content">
                            <span>Browse, Order, Share</span>
                            <h3>Luxury must be comfortable, otherwise it is not luxury.</h3>
                            <a href="product.php" class="btn">Discover more</a>
                        </div>
                    </div>

                    

                </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                
            </div>
        </section>
        <!--Home sec ends-->









        <!--service sec starts-->
            <section class="services">
                <h1 class="heading-title">Our Services</h1>

                <div class="box-container">

                    <div class="box">
                        <img src="asserts/repair-01.png " alt="" >
                        <h3>Repair</h3>   
                    </div>

                    <div class="box">
                        <img src="asserts/warranty-01.png " alt="" >
                        <h3>Waranty Management</h3> 
                    </div>

                    <div class="box">
                        <img src="asserts/deliver-01.png " alt="" >
                        <h3>Home Delivery</h3>   
                    </div>

                    <div class="box">
                        <img src="asserts/pre-01.png " alt="">
                        <h3>Pre-Order</h3> 
                    </div>

                    

                </div>

            </section>
        <!--service sec ends-->








        <!--about sec starts-->
            <section class="home-about">
                <div class="image">
                    <img src="asserts/about.jpg">
                </div>

                <div class="content">
                    <h3>about us</h3>
                    <p>
                        Royal Wrist is a Professional eCommerce Platform. 
                        Here we will provide you only interesting content, 
                        which you will like very much. We're dedicated to providing 
                        you the best of eCommerce, with a focus on premium quality luxury
                        wrist watches.
                        
                        
                    </p>
                    <a href="about.php" class="btn">Read More</a>
                </div>

            </section>

        <!--about sec ends-->










        <!--product sec starts-->
        <section class="home-products">

                <div class="content">
                    <h3>New Arrivals</h3>
                    <p> Timepieces show the wearer's 
                        personality and his wealth rather than time only
                    </p>
                    <a href="product.php" class="btn">Order Now</a>

                </div>

                <div class="image">
                    <img src="asserts/product.jpg">
                </div>

            

        </section>
        <!--product sec starts-->


        <!--offer sec starts-->
            <section class="home-offer">
                <div class="content">
                    <h3>upto 30% off</h3>
                    <p>What's the best way to keep track of time?<br>

                        With a watch, of course! This luxurious wristwatch 
                        is perfect for anyone who wants to keep time in style. 
                        It's a branded watch, so you know it's high quality, 
                        and it comes in a variety of new styles to choose from
                    </p>
                    <a href="product.php" class="btn">Check Now</a>
                </div>
            </section>
        <!--offer sec ends-->



            


        <!--footer section starts -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick access</h3>
                    <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
                    <a href="product.php"> <i class="fas fa-angle-right"></i>Products</a>
                    <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
                    <a href="log.php"> <i class="fas fa-angle-right"></i>Login</a>
                </div>

                <div class="box">
                    <h3>more</h3>
                    <a href="ques.php"> <i class="fas fa-angle-right"></i>ask question</a>
                    <a href="product.php"> <i class="fas fa-angle-right"></i>about us</a>
                    <a href="privacy.php"> <i class="fas fa-angle-right"></i>privacy policy</a>
                    
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="home.php"> <i class="fas fa-phone"></i> +94 11277338</a>
                    <a href="home.php"> <i class="fas fa-phone"></i> +94 77830444</a>
                    <a href="home.php"> <i class="fas fa-envelope"></i> Royalwristcus.sup@gmail.com</a>
                    <a href="home.php"> <i class="fas fa-map"></i> No 132/B, Borella Road, Colombo 10.</a>
                
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#" target=""><i class="fab fa-facebook"></i> facebook</a>
                    <a href="#" target=""><i class="fab fa-instagram"></i> instagram</a>
                    <a href="#" target=""><i class="fab fa-twitter"></i> twitter</a>
                    <a href="#" target=""><i class="fab fa-linkedin"></i> linkedin</a>
                </div>
            </div>

            <div class="credit">© 2022 <span>Perera, W.C.I</span> | All Rights Reserved</div>
        </section>
        <!--footer section ends -->









        <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>

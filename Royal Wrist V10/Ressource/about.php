<?php session_start(); ?>
<!DOCTYPE html>
<!-- IT21702372 W.C.I.PERERA-->
<html>
    <head>

            <title>Royal Wrist</title>
            <link rel="shortcut icon" href="asserts/logo.png" /> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <!-- CDN LIBS --> 
            <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
            <link rel="stylesheet" type="text/css" href="style.css">

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
            
                
        <!--HEADER start-->

        

            
        

        <!--HEADER end-->
        <div class="heading" style="background:url(asserts/aboutHead2.png) no-repeat">
            <h1>About Us</h1>
        </div>


        <!--about starts-->
        <section class="about">

            <div class="image">
                <img src="asserts/about.jpg">
            </div>

            <div class="content">
                <h3>Why choose Us?</h3>  
                <p>
                    If you're looking for branded and luxury watches, 
                    it's worth choosing your supplier with care. With Royal Wrist
                    you'll enjoy the best possible products, 
                    quality, service and support – guaranteed! 

                </p>
                <p>
                    At Royal Wrist we combine all the convenience 
                    of online selection and ordering with the best in personal,
                    attentive customer care. Why wouldn't we? By being the 
                    best, our reputation grows and grows. Everyone’s happy!
                </p>  

                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-box">
                            <span>thousands of <br> desings</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-hand-holding-usd">
                            <span>affordable <br>price</span>
                        </i>
                    </div>
                    <div class="icons">
                        <i class="fas fa-users">
                            <span>Friendly Customer Service</span>
                        </i>
                    </div>

                </div>
            </div>

        </section>
        <!--about ends-->














        <!--customer reviews starts-->

        <section class="reviews">
            <h1 class="heading-title">Customer Reviews</h1>
            <div class="swiper reviews-slider">
                
                <div class="swiper-wrapper">


                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                            <p>
                                product was received very early with good packing. 
                            </p>
                            <h3>Tom Havit</h3>
                            
                            <img src="asserts/tom.png" >
                    </div>

                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                            <p>
                                it's really my first order but it came in very good quality thank you 
                            </p>
                            <h3>Jhone Smith</h3>
                            
                            <img src="asserts/jhon.png" >
                    </div>


                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                            <p>
                                Stylish, classic watches. Come quickly. 
                                An excellent combination of price and quality. 
                                I recommend it to everyone 
                            </p>
                            <h3>Salley Norden</h3>
                            
                            <img src="asserts/salley.png" >
                    </div>

                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                            <p>
                                The product corresponds to the description.
                            </p>
                            <h3>Brian De Lupo</h3>
                            
                            <img src="asserts/brian.png" >
                    </div>


                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i> 
                        </div>
                            <p>
                            Good quality product & fast delivery.
                            </p>
                            <h3>Kate yensla</h3>
                            
                            <img src="asserts/kate.png">
                    </div>

                    <div class="swiper-slider slide">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i> 
                            <i class="fas fa-star"></i> 
                        </div>
                            <p>
                                I'm very satisfied
                            </p>
                            <h3>Anne klaz</h3>
                            
                            <img src="asserts/anne.png">
                    </div>

                </div>
            </div>

            
        </section>
        <!--customer reviews ends-->


























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
                    <a href="#"> <i class="fas fa-phone"></i> +94 11277338</a>
                    <a href="#"> <i class="fas fa-phone"></i> +94 77830444</a>
                    <a href="#"> <i class="fas fa-envelope"></i> Royalwristcus.sup@gmail.com</a>
                    <a href="#"> <i class="fas fa-map"></i> No 132/B, Borella Road, Colombo 10.</a>
                
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

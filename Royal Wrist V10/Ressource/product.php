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


            $con=mysqli_connect("localhost","root","","royal");
            $sql="SELECT productID, productName, price, imgpath  FROM product WHERE prodtype='A'";
            $exsql=mysqli_query($con,$sql) or die(mysqli_error($con));

            $sql2="SELECT productID, productName, price, imgpath  FROM product WHERE prodtype='B' ";
            $exsql2=mysqli_query($con,$sql2) or die(mysqli_error($con));


            

    ?>

        

        <!--HEADER end-->
        <div class="heading" style="background:url(asserts/productHEAD.png) no-repeat">
            <h1>Products</h1>
        </div>

        <!--New product main starts-->
            <section class="products">
                <h1 class="heading-title">New Arrivals</h1>
                    <div class="box-container">

                    <?php while ($proarray=mysqli_fetch_array($exsql)){ ?>

                            <div class="box">

                            <div class="image">

                        <?php echo "<img src=asserts/".$proarray['imgpath']." height=200 width=200?>"; ?>

                     
                        
                                
                            </div>
                            <div class="content">

                            <?php
                                echo "<h3>".$proarray['productName']."</h3>";
                                echo "<h2>LKR ".$proarray['price']."</h3>";
                            ?>
                                
                                
                            </div>
                            <?php echo "<a href=order.php?u_prod_id=".$proarray['productID'].">"; ?> 
                            <!-- <input type="button" name="buynow" value="Buy Now" id="buynow">                          -->
                            
                                <div class="btn1">
                                    Buy Now
                                </div>
                                
                            <?php echo "</a>"; ?> 
                           
                            <?php echo "<a href=productDetail.php?u_prod_id=".$proarray['productID'].">"; ?>
                            
                                <div class="btn2"> 
                                    Read more
                                </div> 
                            <?php echo "</a>"; ?>
                               
                            

                            </div>

                    <?php } ?>

                    </div>

            </section>




        <!--New product main ends-->

        <!--popular product main starts-->

        <section class="products">
                <h1 class="heading-title">Most Popular</h1>
                    <div class="box-container">

                    <?php while ($proarray2=mysqli_fetch_array($exsql2)){ ?>

                            <div class="box">

                            <div class="image">

                        <?php echo "<img src=asserts/".$proarray2['imgpath']." height=200 width=200?>"; ?>

                     
                        
                                
                            </div>
                            <div class="content">

                            <?php
                                echo "<h3>".$proarray2['productName']."</h3>";
                                echo "<h2>LKR ".$proarray2['price']."</h3>";
                            ?>
                                
                                
                            </div>

                           
                           
                            <?php echo "<a href=order.php?u_prod_id=".$proarray2['productID'].">"; ?> 
                            <!-- <input type="button" name="buynow" value="Buy Now" id="buynow">                          -->
                            
                                <div class="btn1">
                                    Buy Now
                                </div>
                                
                            <?php echo "</a>"; ?> 

                            <?php echo "<a href=productDetail.php?u_prod_id=".$proarray2['productID'].">"; ?>
                            
                                <div class="btn2"> 
                                    Read more
                                </div> 
                            <?php echo "</a>"; ?>
                               
                            

                            </div>

                    <?php } ?>

                    </div>

            </section>
        <!--popular product main ends-->


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
                    <a href="about.php"> <i class="fas fa-angle-right"></i>about us</a>
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
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>

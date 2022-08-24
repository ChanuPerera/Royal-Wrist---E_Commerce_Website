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

            
            $productid=$_GET['u_prod_id'];


            $con=mysqli_connect("localhost","root","","royal");
            $sql="SELECT productID, productName, description, price, imgpath  FROM product WHERE productID=$productid ";
            $exsql=mysqli_query($con,$sql) or die(mysqli_error($con));

            // $sql2="SELECT pid, PproductName, Pprice, Pimgpath ,Pdescription FROM product WHERE productID=$productid";
            // $exsql2=mysqli_query($con,$sql2) or die(mysqli_error($con)); 

    ?>
    
        <div class="heading" style="background:url(asserts/productHEAD.png) no-repeat">
            <h1>Products</h1>
        </div>

        

        <?php
        
            while($productarr=mysqli_fetch_array($exsql))
            {
                ?>

                <section class="prodetails">

                        <div class="proimage">
                            <?php
                                echo "<img src=asserts/".$productarr['imgpath']." width=500px>";
                            ?>
                            </div>

                        <div class="content">

                            <?php
                                echo "<h3>".$productarr['productName']."</h3>";
                                // echo "<h2>Specifications</h2>";
                                echo "<p id='des'>".$productarr['description']."</p>";
                            ?>

                                <div class="pricetag">

                                <?php
                                   echo "<p id='pricetag'>LKR : ".$productarr['price']." </p>";
                                ?>

                                </div>

                                <div class="qty">
                                    
                                    <span>QTY</span>
                                    <?php echo "<form action='cart.php' method='post'>";?>
                                    <select class="quantity" id="qty" name="quantity">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                                    
                                                        
                                 
                                <input type="submit" name="addcart" value="Add to Cart" id="addcart">
                                <?php 
                                    echo "<input type=hidden name=h_prodid value=".$productid.">";
                                    echo "</form>";
                                ?>
                        </div>


                </section>      
        
        
        
        <?php        
            }
        ?>


<!------------------------------->













































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
                    <a href="home.php"> <i class="fas fa-angle-right"></i>ask question</a>
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
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>
        

    

</html>

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script language="Javascript" type="text\Javascript"> </script>
    </head>
            


    <body>
        
        <?php

            error_reporting(0);

            if(!isset($_SESSION['userName']))
            {
                include("headerfile.html");
            }
            else
                include("headerfile2.html");
            
                //  $userName = $_SESSION['userName'];

               
        ?>
       

       <!--------Ques from start ----->


            <section class="quesSEC">
                <div class="qeus-form">
                    <div class="form-content">
                            
                        <form action="ques.php" method="post" id="commentForm">
                        <h2>Post your problem here</h2>
                            <p>Our admin team will contact you soon</p>

                            <span> Ask Question <br> </span>
                               <textarea id="questxt" name="txtcomment" placeholder="Type here" rows="5" cols="40" required> </textarea> 
                               <!-- <input type="text" name="txtcomment" ID="question" required> -->
                                <br> 
                                   
                                <input type="submit" value="SUBMIT" id="submitcomment" name="submit" onclick="insertQues()">
                                <?php 

                                            if(isset($_SESSION['userName']))
                                            {
                                                echo "<input type='hidden' name='user' value=".$_SESSION['userName'].">" ; 
                                            }
                                            else
                                                header("Location:log.php");
                                             
                                
                                
                                
                                ?>
                            
                                
                        </form>
                    </div>
                </div>
            </section>

        <!--------Ques from end ----->

        <br><br>
            <hr id="Hline">


        <!----------Question Library starts ---------->

            <?php 
                     $con =mysqli_connect("Localhost","root","","royal");
                     $sql = "SELECT * FROM qa";
                     $select_query = mysqli_query($con,$sql);
               

                while ($result = mysqli_fetch_array($select_query))
                { ?>

                        <section class="quse&A">
                            <div class="qandA-box">
                                <div class="ans">
                                    <span><?php echo $result['userName'] ; ?></span> <br>
                                    <p><?php echo $result['comment'] ; ?></p> <br> 
                                    <p> <i> -- Not answered yet! -- </i></p>

                                </div>
                            </div>
                        </section>


           <?php     } ?>

           

           











       



        <!----------Question Library Ends   ---------->




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
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>


<!--------------Insert query ------->
<script>
        function insertQues(){

            $.ajax({

                    url:"insertQUES.php",
                    type:"POST",
                    data:$("#commentForm").serialize(),
                    success:function()
                    {
                        // alert(data);
                        // window.location.reload();
                        
                    }
                    
            

                });

                
            
            }
</script>
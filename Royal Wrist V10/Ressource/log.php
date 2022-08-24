<!-- IT21702372 W.C.I.PERERA-->

<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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

    </head>



    <body>

    
    

        <!--HEADER starts-->

         <section class="header">

            <a href="#" class="logo">Royal Wrist</a>


            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="product.php">Product</a>
                <a href="about.php">About</a>
                <a href="cart.php" aria-pressed="My Cart" title="My Cart"><i class="fa-solid fa-cart-shopping" ></i></a>
                <a href="log.php" aria-pressed="Login" title="Login"><i class="fa-solid fa-user" ></i></a>
                    

            </nav>

            <!-- Menu Button -->
             <div id="menu-btn" class="fas fa-bars"></div>
        </section> 

        <!--HEADER ends -->




           

        

<!---Login form starts---> 
<section class="logform">
                        
                        <div class="imagebox">
                            <img src="asserts/loginBG2-01.jpg">
                        </div>

                        <div class="box-container">
                            <div class="formbox">
                                <h3 id="formhead">Welcome</h3>
                                <p id="plz">Please Login to Continue</p>

                                <form action="log.php" method="post" name="log"    >
                                    <div class="inputbox">
                                        <span>Username</span>
                                        <input type="text" name="username" placeholder="Enter User Name" id="txtusername" required>
                                    </div>
                                    <div class="inputbox">
                                        <span>Password</span>
                                        <input type="password" name="password" placeholder="Enter Password" id="txtpassword" required>
                                    </div>
                                    <div class="rememberme">
                                        <label>
                                            <input type="checkbox" id="chbox" name="chbox" required> Remember me
                                        </label>
                                    </div>

                                    <div class="inputbox">
                                        <input type="submit" value="LOGIN" name="btnsubmit" id="btnsubmit">
                                    </div>
                                    <div class="inputbox">
                                        <p id="donthave">Don't have an account ? <a href="reg.php"> Register Now</a> </p>
                                    </div>


                                </form>

<!-------------------------------------------------------------------------->

                            <div class="phpout">
                                <p style="color:red; font-size : 1.5rem;">
                                    <?php 
                                            
                                            if(isset($_POST["btnsubmit"]))
                                            {
                                                $username = $_POST["username"];
                                                $password = $_POST["password"];
                                                $valid=false;
                                                $valid2=false;

                                                $con = mysqli_connect("localhost","root","","royal");

                                                if(!$con)
                                                {
                                                    die("Data base not found");
                                                }
                                                

                                                $sql = "SELECT * FROM `user` WHERE `email` = '".$username."' and `password`= '".$password."'";
                                                $sql2 = "SELECT * FROM `admin` WHERE `useradmin` = '".$username."' and `password` ='".$password."'";

                                                $result = mysqli_query($con,$sql);
                                                $result2 = mysqli_query($con,$sql2);

                                                if(mysqli_num_rows($result) > 0)
                                                {
                                                    $valid=true;
                                                }
                                                
                                                else if(mysqli_num_rows($result2) > 0)
                                                {
                                                    $valid2=true;
                                                }

                                                if($valid)
                                                {
                                                    $_SESSION["userName"] = $username;
                                                    header('location:home.php');
                                                }
                                                else if($valid2)
                                                {
                                                    $_SESSION["userName"]=$username;
                                                    header('location:admin.php');
                                                }
                                                else
                                                {
                                                    echo "please enter correct username & password";
                                                }

                                            } 
                                            
                                    ?>
                                </p>
                            </div>    
<!-------------------------------------------------------------------------->                                
                            </div>

                            

                        </div>
</section>

        



        <!---Login form ends -->


            
   

      









        <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>

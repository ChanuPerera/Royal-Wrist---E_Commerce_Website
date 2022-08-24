<!-- IT21702372 W.C.I.PERERA-->
<!DOCTYPE html>
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

    </head>



    <body>
    <?php
            include("headerfile.html");
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
                
            </nav> -->

            <!--Menu Button-->
           <!-- <div id="menu-btn" class="fas fa-bars"></div>
        </section>  -->

        <!--HEADER ends -->




           

        

<!---register form starts---> 
<section class="regform">
                        
                        <div class="imagebox">
                            <img src="asserts/loginBG2-01.jpg">
                        </div>

                        <div class="box-container">
                            <div class="regbox">
                                <h3 id="reghead">Register</h3>
                                <p id="plz">Please enter your details</p>
                            
                           <?php echo "<form action='useracc.php' method='post'>"; ?>
                                    <div class="inputbox">
                                        <span>email</span>
                                        <input type="text" name="email" placeholder="Enter email" id="txtemail" required>
                                    </div>
                                    <div class="inputbox">
                                        <span>Full Name</span>
                                        <input type="text" name="fullName" placeholder="Enter Full Name" id="txtfullName" required>
                                    </div>
                                    <div class="inputbox">
                                        <span>Password</span>
                                        <input type="password" name="password" placeholder="Enter Password" id="txtpassword" required>
                                    </div>
                                    <div class="inputbox">
                                        <span>contact</span>
                                        <input type="text" name="contact" placeholder="Enter Contact" id="txtcontact" required>
                                    </div>
                                    <div class="inputbox">
                                        <span>address</span>
                                        <input type="text" name="address" placeholder="Enter Address" id="txtaddress" required>
                                    </div>
                                    <div class="policy">
                                        <label>
                                            <input type="checkbox" id="chbox" name="chbox" required> I agree to the <a href="privacy.php">terms & conditions</a> and <a href="privacy.php">privacy policy </a>
                                        </label>
                                    </div>
                                    <div class="inputbox">
                                   
                                        <input type="submit" value="REGISTER NOW" name="register" id="btnreg">
                                    </div>
                                    <div class="inputbox">
                                        <input type="button" value="LOG INTO EXISTING ACCOUNT" name="register" id="btnreg" onclick="existingACC()">
                                    </div>
                                    
                                        


                             <?php "</form>" ?>
                            </div>

                            

                        </div>
</section>

        



<!---register form ends -->


    <!---------------------------------------------------------->   
    
       <!-- 

            // $con = mysqli_connect("localhost","root","","royal");

            // if(isset($_POST['register']))
            // {
            //     if(!empty($_POST['email']) && !empty($_POST['fullName']) && !empty($_POST['password']) && !empty($_POST['contact']) && !empty($_POST['address'])) 
            //     {
            //         $email = $_POST['email'];
            //         $fullname = $_POST['fullName'];
            //         $password = $_POST['password'];
            //         $contact = $_POST['contact'];
            //         $address = $_POST['address'];

            //         $sql ="INSERT INTO user(email,fullName,password,contact,address,type) VALUES ('$email','$fullname', '$password', '$contact','$address','C')";
            //         $result = mysqli_query($con,$sql);

            //         if($result)
            //         {
            //             echo "Query Inserted successfully!";
            //         }
            //         else
            //         {
            //             echo "Error occurs";
            //         }

            //     }
            //     else
            //     {
            //         echo "All fileds are required!";
            //     }
            // }



        ?> -->


      









        <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>


<!----java script ----->

<script>

        function existingACC()
        {

            location ="log.php";
        }



</script>
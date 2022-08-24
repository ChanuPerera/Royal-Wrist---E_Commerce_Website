<?php session_start();
    

    if(!isset($_SESSION["userName"]))
    {
        header('Location:log.php');
        

    }
    if(isset($_SESSION["userName"]))
    {
        $currentuser = $_SESSION["userName"];
    }


?>

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
            <script type="text/Javascript" language="Javascript"></script>
    </head>
            


    <body>
        
       
    <?php 
    
    include("headerfile2.html");
    
    
    ?>
                <?php error_reporting(0); ?> 

    <?php
                    
                $email = $_POST['email'];
                $fullname = $_POST['fullName'];
                $password = $_POST['password'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
        
                $con = mysqli_connect("localhost","root","","royal");

                if(!empty($_POST['email']) && !empty($_POST['fullName']) && !empty($_POST['password']) && !empty($_POST['contact']) && !empty($_POST['address'])) 
                {
                    $sql ="INSERT INTO user(email,fullName,password,contact,address,type) VALUES ('$email','$fullname', '$password', '$contact','$address','C')";
                   
                   
                    if(mysqli_query($con,$sql))
                    {

                        echo "Query Inserted successfully!";


                    }
                    else
                    {
                        echo "Error occurs";
                    }

                 }
                



    ?>



       
        











<section class="user-main">
    
    <section class="profile-head">
        <div class="pro-head">
            <div class="content">
             
                <?php 
                
                        $userID = $_SESSION['userName'];
                        // $userDATA ="SELECT email, fullName, password, contact, address FROM `user` WHERE `fullName`='Chanu Perera'";
                        $query = mysqli_query($con,"SELECT email, fullName, password, contact, address FROM user WHERE email='$userID'");
                        $row2 = mysqli_fetch_array($query);
                ?>
                    <h1> <?php echo $row2[1] ?> </h1>
                    <span><?php echo $row2[0] ."<br>" ?></span>
                    <span><?php echo $row2[3] ."<br>" ?></span>
                    <span><?php echo $row2[4] ."<br>" ?></span>
            </div>

            <div class="pro-image">
                        <img src="userprofile/userRoyal.jpg"> 
            </div>

           
        </div>
    </section>





   
                 











    <section class="dashboard">
                 <div class="dash-container">
                     <div class="dash-detail">
                        <h1>DashBoard</h1>
                     </div>
                     <div>
                        <h2>My Orders</h2>
                     </div>

                     <div class="myordertb">


            
                        <table class="orderTB">
                        <tr>
                            <th >Product Name</th>
                            <th >Payment Method</th>
                            <th >Address</th>
                            <th >Total</th>
                        </tr>

            <?php 
                $con = mysqli_connect("localhost","root","","royal");
                $fetch = "SELECT * FROM `ordertb` WHERE email='$userID'";
                $select_sql =  mysqli_query($con,$fetch);

                while ($result = mysqli_fetch_array($select_sql))
         { ?>

           
                <tr>
                <td >
                    <?php echo $result['proname'] ?>
                </td>
                <td>
                    <?php echo $result['paymenttype'] ?>
                </td>
                <td>
                    <?php echo $result['address'] ?>
                </td>
                <td>
                    <?php echo $result['amount'] ?>
                </td>
            </tr>
           

           

        </script>
            <?php   } ?>
           
        </table>



  

                     </div>
                     
                 </div>


                 
    </section>
       
</section>


       
       
       
       
       
















       
       
       <!--------------FOOTER------------------------>
       
       <section class="footer2"> 
            <div class="credit2">© 2022 <span>Perera, W.C.I</span> | All Rights Reserved</div>
        </section> 

        <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>


    </body>


    

</html>

<?php session_start();

    if(!isset($_SESSION["userName"]))
    {
        header('Location:log.php');
    }


?>

<?php 
    error_reporting(0);
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>
            


    <body>

    <?php 
    
    include("headerfile2.html");
    
    
    ?>

<?php 
    $useremail=$_SESSION['userName'];
    $proid = $_GET['u_prod_id'];
    $con=mysqli_connect("localhost","root","","royal");
    $sql=mysqli_query($con,"SELECT email, fullName, contact, address FROM user WHERE email='$useremail'");
    $sql2=mysqli_query($con,"SELECT productID, productName, price FROM product WHERE productID='$proid'");
    


?>


        
            <div class="my-data">
            <h1>Place Your Order Now</h1>
            <form action="order.php" method="post" id="placeorder-form">

            <?php
                    while($result=mysqli_fetch_array($sql))
                    {
                        ?>

                        <div class="order-form-content">
                                <label for="username">User Name </label>
                                    <input type="text" name="username" value='<?php echo $result['fullName'] ;?>' readonly >
                                <br><br>
                                
                                <label for="Email">Email </label>
                                    <input type="text" name="email" value='<?php echo $result['email'] ;?>' readonly>
                                <br><br>
                                
                                <label for="contact">Contact </label>
                                    <input type="text" name="contact" value='<?php echo $result['contact'] ;?>' readonly>
                                <br><br>
                                
                                <label for="address">Address </label>
                                    <input type="text" name="address" value='<?php echo $result['address'] ;?>' readonly>
                                <br><br>
            <?php  } ?>  

            <?php 
                    while($result2=mysqli_fetch_array($sql2))
                    {
                        ?>

                                <label for="proname">Product Name </label>
                                    <input type="text" name="proname" value='<?php echo $result2['productName'] ;?>' readonly>
                                <br><br>

                                <label for="amount">Total Amount (LKR) </label>
                                    <input type="text" name="amount" value='<?php echo $result2['price'] ;?>' readonly>
                                <br><br>
            <?php   } ?>
                               

                                

                        </div>



                                 <div class="payment">

                                    <fieldset>
                                        <legend>Choose your payment method</legend>
                                        <input type="radio" name="paymenttype" value="CREDIT/DEBIT" required>
                                        <label for="paymenttype">CREDIT/DEBIT</label>

                                        <input type="radio" name="paymenttype" value="CASH ON DELIVERY">
                                        <label for="paymenttype">Cash on delivery</label>
                                    </fieldset>
                                </div>


                                <div class="msg">
                                    <p>You will not be able to change your mind once you have placed your order.</p>
                                    </div>

                                <div class="checkme">
                                    <input type="checkbox" name="check" required>
                                    <label for="check">I Understand</label>
                                </div>


                                <div class="f-btn">
                                    
                                    
                                    <input type="submit" name="place-order" id="place-order" value="Place Order"> 
                                    
                                    <a href="product.php"><input type="button" name="cancel" id="cancel" value="Cancel"></a>
                                </div>




        <?php   echo "</form>" ?>
                        </div>
































            <!--JS SWIP-->
            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!--Local JS-->
            <script src="myscript.js"></script>

    </body>



   
</html>




<!---------------INSERT SCRIPT--------------------->

<script>
        $(document).on('submit', '#placeorder-form', function(e){
                e.preventDefault();

            $.ajax({

                method:"POST",
                url:"placeorder.php",
                data:$(this).serialize(),
                success:function(data)
                {
                   alert("Order has been placed successfully!")
                    $('#placeorder-form').find('input'.val(''));
                    
                }

            });
        
        });
    </script>
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
                        if (isset($_SESSION['cart'])){

                            $total = 0; ?>

                            <!-- //as for basket.php, display a table header for product name, price, quantity and subtotal  -->

                            <table id='checkouttable'>
                            <tr>
                            <th>Product name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            </tr>

                            <!-- //as for basket.php, FOREACH loop through basket session array & split value from index for every cell -->

                   <?php         foreach($_SESSION['cart'] as $index => $value){

                                //SQL query to retrieve product id, name and price from product table for every index in FOREACH loop
                                //execute SQL query, fetch the records and store them in an array of records $arrayb.

                                $con=mysqli_connect("Localhost","root","","royal");
                                            
                                $SQL="SELECT productID, productName, price from Product WHERE productID = ".$index;
                                $exeSQLb = mysqli_query($con, $SQL) or die (mysqli_error($con));
                                $arrayb = mysqli_fetch_array($exeSQLb);

                                //Calculate subtotal
                                $subtotal = $value * $arrayb['price']; ?>

                                <!-- SQL INSERT query to store details of ordered items in Order_line table in the DB i.e. order number, 
                                product id (index), ordered quantity (content of the session array) and subtotal. Execute INSERT query. -->

                                
                                <!-- //display the product name, price, ordered quantity and subtotal -->
                                <tr>
                                <td><?php echo $arrayb['productName'] ?></td>
                                <td><?php echo "<p> LKR " .$arrayb['price']."</p>" ?> </td>
                                <td><?php echo $value ?> </td>
                                <td><?php echo "<p> LKR ".$subtotal. "</p>" ?></td>
                                </tr>

                               <?php $total = $total + $subtotal ?>
                          <?php   } ?>

                           
                            <tr>
                            <th colspan='3'>TOTAL</th>
                            <th><?php echo "<p> LKR ".$total."</p>" ?> </th>
                            </tr>
                            </table>
                       <?php } ?>
                
                               

                                

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




             </form>
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

    
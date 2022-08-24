<?php session_start();

    if(!isset($_SESSION["userName"]))
    {
        header('Location:log.php');
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

    </head>
            


    <body>
        
        <?php

                if (isset($_POST['del_prodid'])){
                    $delprodid = $_POST['del_prodid'];
                    unset ($_SESSION['cart'][$delprodid]);
                    echo "<p style = 'margin-left:3%'>1 item removed";
                }

            if(!isset($_SESSION['userName']))
            {
                include("headerfile.html");
            }
            else
            {
                include("headerfile2.html");

            }
                
            
            

                if(isset($_POST['h_prodid'])){

                    $newprodid = $_POST['h_prodid'];
                    $reqQty = $_POST['quantity'];

                    $_SESSION['cart'][$newprodid] =  $reqQty;

                }

                $total=0;

        ?>
       

 

         
       <section class="cart-table">

            <div class="table-container" width="100%">

                <table width="100%" cellspacing="5" cellpadding="5" class="cart">


                    <tr>

                        <td>
                            <table width="100%" cellspacing="5" cellpadding="5" class="inner-cart">

                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>

                                </tr>



                                <?php 


                                    if(isset($_SESSION['cart'])){
                                        foreach($_SESSION['cart'] as $index => $value)
                                        {
                                            $con=mysqli_connect("Localhost","root","","royal");
                                            $SQL="SELECT productID, productName, price from Product WHERE productID = ".$index;
                                            $exeSQL=mysqli_query($con, $SQL) or die (mysqli_error($con));
                                            $arrayp=mysqli_fetch_array($exeSQL); 
                                            
                                        
                                
                                            ?>
                                            <tr >
                                
                                                <td class="cart-data" > <?php echo "<p>".$arrayp['productName']."</p>";?></td>
                                                <td class="cart-data" ><?php echo "<p>LKR : ".$arrayp['price']."</p>";?></td>
                                                <td class="cart-data" ><?php echo "<p>".$value."</p>";?></td>

                                                <?php 
                                                    $subtotal = $arrayp['price']*$value; 
                                                    echo "<td class='cart-data'> LKR : ".$subtotal."</td>";
                                                    
                                                    echo "<form action=cart.php method=post>";
                                                    echo "<td>";
                                                    echo "<input type=submit value='Remove' id='submitbtn'>";
                                                    echo "</td>";
                                                    echo "<input type=hidden name=del_prodid value=".$arrayp['productID'].">";
                                                    echo "</form>";
                                                ?>



                                               

                                            </tr>
                                        <?php $total = $total+$subtotal;  
                                    }
                                }
                                 
                                ?>


                            <!-- popular -->

                            
                           
                                            <tr id="Total">
                                                <td colspan="3" >
                                                    <span>Total</span>
                                                 </td>
                                                <td align="center" >
                                                <?php echo "<p>LKR : ".$total."</p>";?>
                                                </td>
                                
                                            </tr> 


                            </table>
                        </td>

                    </tr>

                </table>


            </div>
                        <?php echo "<br><br><a href='clearcart.php' class='clear'>CLEAR CART</a>"; ?>
                        <?php echo "<a href='ordercart.php' class='checkout'>CHECKOUT</a>"; ?>

                        

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

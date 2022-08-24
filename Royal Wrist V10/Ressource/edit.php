<?php session_start();?>

<!DOCTYPE html>
<!-- IT21702372 W.C.I.PERERA-->
<html>
    <head>

            <title>Royal Wrist</title>
            <link rel="shortcut icon" href="asserts/logo.png" /> 
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <!-- CDN LIBS --> 
            <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">    
            <link rel="stylesheet" type="text/css" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    </head>
            


    <body>
        
       
    <?php 
    
    include("headerfile3.html");
    
    
    ?>



    <!-- EDIT FORM -->

<?php 
    
    $con = mysqli_connect("localhost","root","","royal");

    if(!$con)
    {
        die("Cannot Connect to the Database");
    }

    $sql = "SELECT * FROM product WHERE productID='".$_GET['u_id']."'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_assoc($result);
    }
    
    
    
?>

<section class="edit">
        <div class="edit-form">
            <h3>Please Fill the Form</h3>
            <div class="EDITform-content">  
            
           <form method="post" id="update_form" action="update.php?u_id=<?php echo $_GET["u_id"]; ?> ">

                    <label for="productName"> Product Name : </label>
                    <input type="text"  name="productName" id="productName" value=" <?php echo $row['productName']; ?>">
                    <br><br>

                    <label for="description"> Description : </label>
                    <textarea rows="5" cols="10" name="description" id="descriptionID"><?php echo $row['description']; ?> </textarea>
                    <br><br>

                    <label for="price"> Price : </label>
                    <input type="text"  name="price" id="price" value=" <?php echo $row['price']; ?>">
                    <br><br>

                    <label for="imgpath"> Image path : </label>
                    <input type="text"  name="imgpath" id="imgpath" value=" <?php echo $row['imgpath']; ?>">
                    <br><br>

                    <label for="prodtype"> Product Type : </label>
                    <input type="text"  name="prodtype" id="prodtype" value=" <?php echo $row['prodtype']; ?>">
                    <br><br>

                    
                    

                   </form>

            </div>
                    <div class="UPbtnset">
                    <input type="submit" name="submit" id="submit" value="UPDATE DATA" >
                    <input type="button" name="back" id="btnback" value="CANCEL" onclick="back()" >
                    </div>
        </div>
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


<script>
    function back()
    {
        location="admin.php";
    }
</script>
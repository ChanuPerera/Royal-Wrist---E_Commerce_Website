
<?php
        $id = $_GET['u_id'];
        $productName = $_POST['productName'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $imgpath = $_POST['imgpath'];
        $prodtype = $_POST['prodtype'];

        $con = mysqli_connect("Localhost","root","","royal");
        $sql = "UPDATE product SET productName='{$productName}', description='{$description}', price='{$price}', imgpath='{$imgpath}',prodtype='{$prodtype}' WHERE productID='$id'";   

    
        if(!$con)
        {
            die("Cannot Connect to the Database");
        }

        if(mysqli_query($con,$sql))
        {
            
            header("Location: admin.php"); 
            
        
        }
        else
        {
            echo "Error";
        }
?>
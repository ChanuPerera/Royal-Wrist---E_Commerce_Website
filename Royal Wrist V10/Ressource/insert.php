
<?php

    $con = mysqli_connect("Localhost","root","","royal");
    $productName = $_POST["productName"];
    $description = $_POST["description"];
    $price=$_POST["price"];
    $imgpath = $_POST["imgpath"];
    $prodtype = $_POST["prodtype"];
    $sql = "INSERT INTO product(productName, description, price, imgpath, prodtype ) VALUES ('{$productName}','{$description}','{$price}','{$imgpath}','{$prodtype}')";



    // print_r($_POST);


    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "Data saved in table";
    }
?>

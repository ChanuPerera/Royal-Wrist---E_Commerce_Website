<?php

    $con = mysqli_connect("Localhost","root","","royal");
    $productName = $_POST["PproductName"];
    $description = $_POST["Pdescription"];
    $price=$_POST["Pprice"];
    $imgpath = $_POST["Pimgpath"];
    $sql = "INSERT INTO popular(PproductName, Pdescription, Pprice, Pimgpath ) VALUES ('{$productName}','{$description}','{$price}','{$imgpath}')";



    // print_r($_POST);


    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "Data saved in table";
    }
?>
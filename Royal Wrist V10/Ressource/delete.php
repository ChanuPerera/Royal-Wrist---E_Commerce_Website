<?php




    /*-----------php v2-------------*/

    $con = mysqli_connect("Localhost","root","","royal");
    $id = $_POST['delete_id'];
    $query = mysqli_query($con,"DELETE FROM product WHERE productID='$id'");


?>
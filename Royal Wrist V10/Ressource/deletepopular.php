<?php




    /*-----------php v2-------------*/

    $con = mysqli_connect("Localhost","root","","royal");
    $id = $_POST['delete_id2'];
    $query = mysqli_query($con,"DELETE FROM popular WHERE pid='$id'");


?>
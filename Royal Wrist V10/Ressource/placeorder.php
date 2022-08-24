<?php


    $con = mysqli_connect("Localhost","root","","royal");
    // $username = $_POST['username'];
    // $email=$_POST['email'];
    // $contact=$_POST['contact'];
    // $productName=$_POST['productName'];
    // $total=$_POST['total'];
    // $paymenttype=$_POST['paymenttype'];
    // $sql="INSERT INTO ordertb(username, email, contact, productName, total) VALUES('{$username}','{$email}','{$contact}','{$productName}','{ $total}' ,'{ $paymenttype}')";

    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $proname=$_POST['proname'];
    $amount=$_POST['amount'];
    $paymenttype=$_POST['paymenttype'];
    $sql="INSERT INTO ordertb(username, email, contact, address, proname, amount, paymenttype) VALUES ('{$username}','{$email}','{$contact}','{$address}','{$proname}','{$amount}','{$paymenttype}')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "Data saved in table";
    }

    unset($_SESSION['basket']);
?>
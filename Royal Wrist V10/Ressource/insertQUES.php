

<?php 


error_reporting(0);

    $con = mysqli_connect("Localhost","root","","royal");
    $comment = $_POST["txtcomment"];
    $userName = $_POST["user"];
    $sql = "INSERT INTO `qa`(`userName`,`comment`) VALUES('{$userName}','{$comment}')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "Your question has been saved ";
    }

?>
<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

//database details

$host = "localhost";
$username = "root";
$password = "";
$dbname = "test";

    //database connection
    $con = mysqli_connect($host, $username, $password, $dbname);
    if(!$con)
    {
        die('Connection Failed : '.mysqli_conntect_error());
    }else{
        $sql = "INSERT INTO contactform ('id', 'name', 'email', 'message') VALUES ('0', '$name', '$email', '$message')";
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
        echo "Thank you, your contact request has been sent";
        }
        mysqli_close($con);
    }

?>
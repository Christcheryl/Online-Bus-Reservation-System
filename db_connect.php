<?php
$conn= new mysqli('localhost','root','','booking');

if (!$conn)
{
    error_reporting(0);
    die("Could not connect to mysql".mysqli_error($conn));
}

?>
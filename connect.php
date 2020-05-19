<?php
$host="localhost";
$username="root";
$password="1234567890";
$db_name="management";
$connect=new mysqli($host,$username,$password,$db_name);
if($connect->connect_error)
{
    die("unable to connect");
}
?>
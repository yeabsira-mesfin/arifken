<?php
session_start();
require_once 'classes/DB.php';

if (!isset($_GET['id'])) {
    die("Illegal request");
}
$id = $_GET['id'];
$sql = "delete from events where EventID = '$id'";
$delete = mysqli_query($con, $sql);
if($delete){
   echo "<script>alert('You have deleted successfuly')</script>";
    header('Location: viewEvent.php');
}
else{
   die("Illegal request");  
}


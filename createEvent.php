<?php
session_start();
require_once 'classes/DB.php';

if (isset($_POST['register'])) {
    $Title = $_POST['Title'];
    $vendor = $_SESSION['vendor']; 
    $Description = $_POST['Description'];    
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];
    $Cost = $_POST['Cost'];
    $image = $_FILES['image']['name'];
    $LocID = $_POST['LocID'];
    $image_name = date('lFYhis').".png";
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$image_name);
    $sql = "INSERT INTO events(user, Title, Description, StartDate, EndDate,Cost, Image,LocationID ) VALUES ('$vendor', '$Title', '$Description','$StartDate ','$EndDate','$Cost', '$image_name','$LocID')";
    mysqli_query($con, $sql);
    header('Location:viewEvent.php');

}
?>
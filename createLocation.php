<?php
session_start();
require_once 'classes/DB.php';

if (isset($_POST['register'])) {
    $locationName = $_POST['Name'];
    $vendor = $_SESSION['vendor']; 
    $locationAddress = $_POST['Address'];    
    $managerFName = $_POST['managerFName'];
    $managerLName = $_POST['managerLName'];
    $managerEmail = $_POST['managerEmail'];
    $managerNumber = $_POST['managerNumber'];
    $maxCap = $_POST['MaxCapacity'];
    $sql = "INSERT INTO locations(Name, vendor, Address, ManagerFName, ManagerLName, ManagerEmail,ManagerNumber,MaxCapacity ) VALUES ('$locationName', '$vendor', '$locationAddress','$managerFName ',' $managerLName',' $managerEmail',' $managerNumber',' $maxCap')";
    mysqli_query($con, $sql);
    header('Location:viewLocations.php');

}


?>
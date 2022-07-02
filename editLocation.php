<?php
session_start();
require_once 'classes/DB.php';

if (isset($_POST['update'])) {
$id = $_POST['LocationID'];
$locationName = $_POST['Name'];
$Vendor = $_POST['Vendor'];
$Address = $_POST['Address'];
$managerFName = $_POST['ManagerFName'];
$managerLName = $_POST['ManagerLName'];
$managerEmail = $_POST['ManagerEmail'];
$managerNumber = $_POST['ManagerNumber'];
$locationMaxCap = $_POST['MaxCapacity'];

$sql = "update locations set Name = '$locationName' ,vendor = '$Vendor', Address='$Address', ManagerFName='$managerFName', ManagerLName='$managerLName', ManagerEmail='$managerEmail',ManagerNumber='$managerNumber',MaxCapacity='$locationMaxCap' where LocationID=$id";

    mysqli_query($con, $sql);
    header('Location:viewLocations.php');

}

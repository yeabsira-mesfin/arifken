
<?php
session_start();
require_once 'classes/DB.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>  
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <table class = "table table-hover">
                    <thead><!--table labels-->
                        <tr>
                            <th>Location ID</th>
                            <th>Name</th>
                            <th>Address</th>                    
                            <th>Manager First Name</th>
                            <th>Manager Last Name</th>
                            <th>Manager Email</th>
                            <th>Manager Number</th>
                            <th>Max Capacity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                    if(isset($_SESSION['admin'])){          
                    $sql = "select * from locations";
                    }
                    elseif(isset($_SESSION['vendor'])){
                        $username = $_SESSION['vendor'];
                        $sql = "select * from locations where vendor = '$username'";
                    }
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        
                    <tbody><!--table contents, pulled from database-->
                        <?php
                        echo '<tr>';
                        echo '<td>' . $row['LocationID'] . '</td>';
                        echo '<td>' . $row['Name'] . '</td>';
                        echo '<td>' . $row['Address'] . '</td>';                    
                        echo '<td>' . $row['ManagerFName'] . '</td>';
                        echo '<td>' . $row['ManagerLName'] . '</td>';
                        echo '<td>' . $row['ManagerEmail'] . '</td>';
                        echo '<td>' . $row['ManagerNumber'] . '</td>';
                        echo '<td>' . $row['MaxCapacity'] . '</td>';
                        echo '<td>'
                        . '<a href="viewLocation.php?id='.$row['LocationID'].'">View</a> '
                        . '<a href="editLocationForm.php?id='.$row['LocationID'].'">Edit</a> '
                        . '<a class="delete" href="deleteLocation.php?id='.$row['LocationID'].'">Delete</a> '
                        . '</td>';
                        echo '</tr>';  
                        }}?>
                    </tbody>
                </table>
                <a class="btn btn-default" href="createLocationForm.php">Create Location</a>
             
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>

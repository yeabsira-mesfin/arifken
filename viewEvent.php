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
                            <th>Event ID</th>
                            <th>Title</th>
                            <th>Description</th>                    
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Cost</th>
                            <th>Location ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                    if(isset($_SESSION['admin'])){          
                    $sql = "select * from events";
                    }
                    elseif(isset($_SESSION['vendor'])){
                        $username = $_SESSION['vendor'];
                        $sql = "select * from events where user = '$username'";
                    }
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        
                    <tbody><!--table contents, pulled from database-->
                        <?php
                        echo '<tr>';
                        echo '<td>' . $row['EventID'] . '</td>';
                        echo '<td>' . $row['Title'] . '</td>';
                        echo '<td>' . $row['Description'] . '</td>';                    
                        echo '<td>' . $row['StartDate'] . '</td>';
                        echo '<td>' . $row['EndDate'] . '</td>';
                        echo '<td>' . $row['Cost'] . '</td>';
                        echo '<td>' . $row['LocationID'] . '</td>';
                        echo '<td>'
                        . '<a class="delete" href="deleteEvent.php?id='.$row['EventID'].'">Delete</a> '
                        . '</td>';
                        echo '</tr>';  
                        }}?>
                    </tbody>
                </table>
                <a class="btn btn-default" href="createEventForm.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Create Event</a>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>

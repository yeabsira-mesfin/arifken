<?php
session_start();
require_once 'classes/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Event Form</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content">
            <div class = "container">
                <h1>Create Event Form</h1><!--form title-->
                <?php
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createEvent.php" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Title" class="col-md-2 control-label">Title</label><!--event title-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Title" name="Title"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Description" class="col-md-2 control-label">Description</label><!--event description-->
                        <div class="col-md-5">
                        <textarea rows="7" name="Description" id="Description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-4">
                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="StartDate" class="col-md-2 control-label">Start Date</label><!--start date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="StartDate" name="StartDate"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="EndDate" class="col-md-2 control-label">End Date</label><!--end date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="EndDate" name="EndDate" /><!--input-->
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Cost" class="col-md-2 control-label">Cost</label><!--cost-->
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="Cost" name="Cost"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                         
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Cost" class="col-md-2 control-label">Image</label><!--cost-->
                        <div class="col-md-5">
                            <input type="file" class="form-control" id="image" name="image"  />
                        </div>
                        <div class="col-md-4">
                         
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LocID" class="col-md-2 control-label">Location ID</label><!--location id-->
                        <div class="col-md-5">
                            <select name="LocID"
                                        id="LocID"
                                        class="form-control"
                                        >
                                    <?php
                                     if(isset($_SESSION['vendor'])){
                                        $username = $_SESSION['vendor'];
                                        $sql = "select * from locations where vendor = '$username'";
                                        $result = mysqli_query($con, $sql);
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row['LocationID'].'">'.$row['Name'].'</option>';
                                    }}}
                                    ?>
                                </select>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <input type="submit" class = "btn btn-primary" value="Create Event" name='register'>
                    <a class="btn btn-primary navbar-btn" href = "viewEvents.php">Back</a><!--register button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

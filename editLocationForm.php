<?php
session_start();
require_once 'classes/DB.php';

if (isset($_GET['id'])) {

    $id = $_GET['id'];
     $sql = "select * from locations where LocationID = '$id'";
    $result = mysqli_query($con, $sql);
    $row1 = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Location</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
   
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1>Edit Location Form</h1><!--form title-->
      
                <form action="editLocation.php" method="POST" class="form-horizontal">
                   <input type="hidden" name='LocationID' value="<?php echo $row1['LocationID']; ?>" >
                    <div class="form-group">
                        <label for="Name" class="col-md-2 control-label">Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Name" name="Name" value="<?php echo $row1['Name']; ?>">
                        <div class="col-md-4">
                            <span id="LNameError" class="error"></span>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="Vendor" class="col-md-2 control-label">Vendor</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Vendor" name="Vendor" value="<?php echo $row1['vendor']; ?>" />
                        </div>
                        <div class="col-md-4">
                            <span id="LAddressError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address" class="col-md-2 control-label">Address</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $row1['Name']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="LAddressError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ManagerFName" class="col-md-2 control-label">Manager First Name</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="ManagerFName" name="ManagerFName" value="<?php echo $row1['ManagerFName']; ?>" /><!--input with current data from database-->
                        </div> 
                        <div class="col-md-4">
                            <span id="mNameError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ManagerLName" class="col-md-2 control-label">Manager Last Name</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="ManagerLName" name="ManagerLName" value="<?php echo $row1['ManagerLName']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="mNameError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ManagerEmail" class="col-md-2 control-label">Manager Email</label><!--label-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="ManagerEmail" name="ManagerEmail" value="<?php echo $row1['ManagerEmail']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="mEmailError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ManagerNumber" class="col-md-2 control-label">Manager Number</label><!--label-->
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="ManagerNumber" name="ManagerNumber" value="<?php echo $row1['ManagerNumber']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="mNumError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="MaxCapacity" class="col-md-2 control-label">Max Capacity</label><!--label-->
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="MaxCapacity" name="MaxCapacity" value="<?php echo $row1['MaxCapacity']; ?>" /><!--input with current data from database-->
                        </div>
                        <div class="col-md-4">
                            <span id="capError" class="error"></span><!--error message for invalid input-->
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default pull-right" name="update">Update <span class="glyphicon glyphicon-floppy-disk"></span></button><!--submit button-->
                    <a class="btn btn-default" href="viewlocations.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a><!--return/back button-->
                </form>

       
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

<?php } ?>
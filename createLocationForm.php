<?php
session_start();
require_once 'classes/DB.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Location Form</title>
        <style>
            span.error{
                color: red;
            }
        </style>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1>Create Location Form</h1><!--form title-->
    
                <form action="createLocation.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="Name" class="col-md-2 control-label">Location Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Name" name="Name" />
                        </div>
                        <div class="col-md-4">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address" class="col-md-2 control-label">Address</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Address" name="Address" /><!--input-->
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerFName" class="col-md-2 control-label">Manager First Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="managerFName" name="managerFName"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerLName" class="col-md-2 control-label">Manager Last Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="managerName" name="managerLName"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                         
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerEmail" class="col-md-2 control-label">Manager Email</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="managerEmail" name="managerEmail" /><!--input-->
                        </div>
                        <div class="col-md-4">
                       
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerNumber" class="col-md-2 control-label">Manager Number</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="managerNumber" name="managerNumber" /><!--input-->
                        </div>
                        <div class="col-md-4">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="locationMaxCap" class="col-md-2 control-label">Max Capacity</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="locationMaxCap" name="maxCap"  /><!--input-->
                        </div>
                        <div class="col-md-4">
                          
                        </div>
                    </div>

                <!--codes below has no connection with the database.-->
                    <div class="form-group">
                        <label class="col-md-2 control-label">Location Type</label><!--radio buttons with multiple options-->
                        <div class="col-md-5">
                            <input type="radio"  name="lType"  >Indoor <br>
                            <input type="radio" name="lType" >Outdoor <br>
                            <input type="radio" name="lType" >Both
                        </div>
                        <div class="col-md-4">
                            <span id="typeError" class="error">

                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Seating Available</label>
                        <div class="col-md-5">
                            <select class="form-control" name="seat">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Facilities</label>
                        <div class="col-md-5">
                            <input type="checkbox" name="facilities[]" value="sound"  >Sound Room <br>
                            <input type="checkbox" name="facilities[]" value="screen"  >Big Screen Room <br>
                            <input type="checkbox" name="facilities[]" value="restaurant"  >Restaurants <br>
                            <input type="checkbox" name="facilities[]" value="bar"  >Bar <br>
                            <input type="checkbox" name="facilities[]" value="disabled"  >Disabled Access Toilets <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Url</label>
                        <div class="col-md-5">
                            <input type="text" class="control-label" name="link">
                        </div>
                        <div class="col-md-4">
                       
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Attach File:</label>
                        <div class="col-md-5">
                            <input type="file" class="control-label" name="attachment">
                        </div>
                    </div>
                <input type="submit" name='register' class="btn btn-primary" value='Create Location'>
                </form>
                <a class="btn btn-primary" href="viewLocations.php">Back</a><!--return/back button-->
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

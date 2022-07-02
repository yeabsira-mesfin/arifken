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
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Yeabsira Mesfin</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: yabidesta@gmail.com<br>
                  
                        <span class="glyphicon glyphicon-phone"></span> Mobile: +251902537660
                    </p>
                </div>
                <div class="col-md-6">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Comment">Message:</label>
                            <textarea id="Comment" rows="10" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit"  name="submit" class="btn btn-default pull-right">Send</button>
                    </form>
                </div>
            </div>


        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

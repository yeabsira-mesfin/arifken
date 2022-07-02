<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>

        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <form action="confirmemail.php" class ="form-group" method="POST">
                        <div class="form-group">
                            <label for="confirmemail">Confirm your email: </label>
                            <input type="text"
                                   id="confirmemail"
                                   name="confirmemail"
                                   class="form-control" required>
                            <span class="error">
                      
                            </span>
                        </div>
                      
                    
                        <input type="submit" name="confirm" value="Register" class = "btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>

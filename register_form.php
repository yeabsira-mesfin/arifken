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
                    <form action="register.php" class ="form-group" method="POST">
                        <div class="form-group">
                            <label for="username">First Name: </label>
                            <input type="text"
                                   id="username"
                                   name="username"
                                   class="form-control" required>
                            <span class="error">
                              <?php //if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="username">Last Name: </label>
                            <input type="text"
                                   id="lastname"
                                   name="lastname"
                                   class="form-control" required>
                            <span class="error">
                              <?php //if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="username">Email: </label>
                            <input type="text"
                                   id="email"
                                   name="email"
                                   class="form-control" required>
                            <span class="error">
                              <?php //if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control" required>
                            <span class="error">
                                <?php //if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password: </label>
                            <input type="password"
                                   id="cpassword"
                                   name="cpassword"
                                   class="form-control" required>
                            <span class="error">
                                <?php // if (isset($errors['cpassword'])) echo $errors['cpassword']; ?>
                            </span>
                        </div>
                        <div class="form-group">
                            <p>User Type</p>
                            <label for="role">Vendor: </label>
                            <input type="radio" name="usertype" class="" value="1" required>
                            <label for="role">Customer: </label>
                             <input type="radio"  name="usertype"  class="" value='2' required>
                            </div>
                        <input type="submit" name="register" value="Register" class = "btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>

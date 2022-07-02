

<header class="bgImage">
    <style>
       @media only screen and (min-width: 900px)
       { .image{
        margin-left:-20rem;
       }
    }
       @media only screen and (max-width: 899px)
       { .image{
        margin-left:2rem;
       }
    }
    </style>
    <nav class="navbar" style="background:#ffc308 !important;">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
               <img src="images/logoo.png" alt="" style="width:60px;border-radius:10px; " class="image">
                <a href = "index.php" style="font-size: 36px">
                   Arif Ken Weekend Planner
                </a>
             
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php
                if(isset($_SESSION['logged'])){
                    $user = $_SESSION['logged'];
                    $sql = "select * from users where username = '$user'";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) == 1){
                        $row = mysqli_fetch_assoc($result);
                        $name= $row['username'];
                    }}
                //links to database contents. *if logged in
                echo '<li><a href = "index.php" style="font-size: 20px">Home</a></li>';
                if(isset($_SESSION['vendor'])){
                    echo '<li><a href = "index.php" style="font-size: 20px">Historical Sites</a></li>';
                    echo '<li><a href = "viewEvent.php" style="font-size: 20px">View Events</a></li>';
                    echo '<li><a href = "viewLocations.php" style="font-size: 20px">Our Locations</a></li>';
                    echo '<li><a href = "contact.php" style="font-size: 20px">Contact Us</a></li>';
                    echo '<li class="btn" style="font-size: 20px;background:#000;"><a class = "btn btn-secondary" href = "logout.php" style="background:#000;
                    color:white;border:white solid;">Logout</a></li>';
                }
                //links non database contents. *if logged out
                elseif(isset($_SESSION['user'])) {
                   
                    echo '<li><a href = "index.php" style="font-size: 20px">Historical Sites</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li><a href = "#">'."Logged in as $name".'</a></li>';
                    echo '<li class="btn" style="font-size: 20px;height=10px; background:#000;"><a class = "btn btn-secondary" href = "logout.php" style="background:#000;
                    color:white;border:white solid;">Logout</a></li>';
                   
                }

                elseif (isset($_SESSION['admin'])) {
                    echo '<li><a href = "index.php" style="font-size: 20px">Historical Sites</a></li>';
                    echo '<li><a href = "viewEvent.php" style="font-size: 20px">View Events</a></li>';
                    echo '<li><a href = "viewLocations.php" style="font-size: 20px">Our Locations</a></li>';
                    echo '<li><a href = "contact.php" style="font-size: 20px">Contact Us</a></li>';
                    echo '<li class="btn bn" style="font-size: 20px;background:#000;"><a class = "btn btn-secondary" href = "logout.php" style="background:#000;
                    color:white;border:white solid;">Logout</a></li>';
                }
                
                else {
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#login" style="background:#000; color:white; border:white solid;">Login</button>';

                }
                ?>
                

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                
                                <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class ="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class = "form-group"><!--username-->
                                                <label for="username">Username:</label>
                                                <input type="text"
                                                       name="username"
                                                       class="form-control"
                                                       value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                                       required/>
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Password:</label>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       value=""
                                                       required />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <input type="submit" class = "btn btn-default loginbtn" name='login' value='Login'>
                                            <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">Register</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron" style="color:black;"><!--jumbotron-->
                <h1>We host the best events for you with proper management</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
                  Controlling chaos is what event management is all about. There’s  a lot to manage with conferences, marketing events, and similar productions. Fortunately, today’s best event management processes help you with every aspect of your event journey.
                </p>
            </div>
        </div>
    </div>
</header>

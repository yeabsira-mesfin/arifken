<?php
session_start();
include('classes/DB.php');
if(isset($_SESSION['user'])){
    if (strlen($_SESSION['user']) != 0) {
        
    }
    else{
        header("Location: login_form.php");
    }

}

if(isset($SESSION['vendor'])){
    if (strlen($_SESSION['vendor']) != 0) {
        
    }
    else{
        header("Location: login_form.php");
    }
    
}


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
                    <h1>What we organize</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--wedding content-->
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/1.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Weddings</h1><!--title-->
                            <p><!--content-->
                            A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. Most wedding ceremonies involve an exchange of marriage vows by the couple,
                            </p>

                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/2.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Birthday</h1><!--title-->
                            <p><!--content-->
                          Golden Birthday” is when your age and date of birth are the same. “Birthday Paradox” is the likelihood that out of 23 people, there is a 50/50 chance that two of them will have the same birthday.
                            </p>
                           
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <?php
                        
                    $sql = "select * from events";
                    $result = mysqli_query($con, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img width="640px" src="images/<?php echo $row['Image'] ?>" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1><?php echo $row['Title']; ?></h1><!--title-->
                            <p><?php echo $row['Description']; ?></p>
                            <button class="btn btn-primary">Read more</button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->

            <?php }} ?>
      

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-12"><!--image holder with 6 grid columns-->
                            <img src="images/4.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-12"><!--Text holder with 6 column grid-->
                          <br>
                            <h1>Meeting</h1><!--title-->
                            <p><!--content-->
                            A meeting is a gathering of two or more people that has been convened for the purpose of achieving a common goal through verbal interaction, such as sharing information or reaching agreement. We make everything perfect to make your meetings successful.
                            </p>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

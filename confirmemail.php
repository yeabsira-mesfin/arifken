<?php
session_start();
require_once 'classes/DB.php';

if (isset($_POST['confirm'])) {
    $confirmemail = $_POST['confirmemail'];
    $username =  $_SESSION['vendor'];
    $sql = "select * from users where username = '$username'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $token= $row['token'];
        echo $token;
        $username = $row['username'];
        if($confirmemail == $token){
            $updatesql = "update users set is_confirmed = 1 where username='$username'";
            $result = mysqli_query($con, $updatesql);
            $_SESSION['logged'] = $username;
            header("Location: homeIn.php");
        }
        else{
            echo "1";
       
        }
    }
    else{
        echo "2";
        header("Location: login_form.php");
    }
}
else{
    echo "3";
   
}
?>
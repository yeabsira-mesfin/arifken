<?php
session_start();
require_once 'classes/DB.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from users where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $role= $row['role'];
        $is_confirmed = $row['is_confirmed'];
        if($is_confirmed == 1){
        if ($role == 'vendor') {
            $_SESSION['vendor'] = $username;
            $_SESSION['logged'] = $username;
            header("Location: homeIn.php");
        }
        if ($role == 'user') {
            $_SESSION['user'] = $username;
            $_SESSION['logged'] = $username;
            header("Location: homeIn.php");
        }
        if ($role == 'admin') {
            $_SESSION['admin'] = $username;
            $_SESSION['logged'] = $username;
            header("Location: homeIn.php");
        }
    }
    else{
        $_SESSION['msg'] = "OTP verification failed";
        header("Location: login_form.php");
    }
}
    else{
        echo "Not found";
        header("Location: homeIn.php");
    }
}
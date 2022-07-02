<?php
session_start();
//require_once 'utils/functions.php';
//require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'clean_xss.php';
require_once('sendmail.php');



if (isset($_POST['register'])) {

$sql1 = "select * from setting";
$result = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($result);
$Mail_protocol = $row['Mail_protocol'];
$Mail_host	 = $row['Mail_host'];
$Mail_port = $row['Mail_port'];
$Mail_username = $row['Mail_username'];
$Mail_password = $row['Mail_password'];
$Mail_from = $row['Mail_from'];
$Mail_title = $row['Mail_title'];
$Mail_replyto = $row['Mail_replyto'];
$name = $row['Website_name'];
$username = clean_xss($_POST['username']);
$lastname = clean_xss($_POST['lastname']);
$lastname = clean_xss($_POST['lastname']);
$email = clean_xss($_POST['email']);
$password = clean_xss($_POST['password']);
$usertype = clean_xss($_POST['usertype']);
$generator = "1357902468";
$result = "";
for ($i = 1; $i <= 6; $i++) {
	$result .= substr($generator, (rand()%(strlen($generator))), 1);
}
$body = $result;
if ($usertype == 1) {
    $sql = "INSERT INTO users(username,lastname,email, password, role, token) VALUES ('$username','$lastname','$email', '$password', 'vendor', '$result')";
    mysqli_query($con, $sql);
    $_SESSION['vendor'] = $username;
    sendsmtp($email,$Mail_protocol,$Mail_host,$Mail_port,$Mail_username,$Mail_password,$Mail_from,$Mail_title,$Mail_replyto,$name, $body);
    header('Location:confirm.php');
}
if($usertype == 2){
$sql = "INSERT INTO users(username,lastname,email, password, role,token) VALUES ('$username','$lastname','$email', '$password', 'user',$result,$body)";
mysqli_query($con, $sql);
$_SESSION['logged'] = $username;
$_SESSION['user'] = $username;
sendsmtp($email,$Mail_protocol,$Mail_host,$Mail_port,$Mail_username,$Mail_password,$Mail_from,$Mail_title,$Mail_replyto,$name);
header('Location:confirm.php');
}
}

?>
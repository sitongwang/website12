<?php
session_start();
$errmsg_arr = array();
$errflag = false;
// configuration
$dbhost     = "localhost";
$dbname     = "DjT";
$dbuser     = "root";
$dbpass     = "root";

// database connection
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

// new data

$user = $_POST['uname'];
$password = $_POST['pass'];

if($user == '') {
    $errmsg_arr[] = 'You must enter your Username';
    $errflag = true;
}
if($password == '') {
    $errmsg_arr[] = 'You must enter your Password';
    $errflag = true;
}

// query
$result = $conn->prepare("SELECT * FROM users WHERE username= :ali AND password= :ali12");
$result->bindParam(':ali', $user);
$result->bindParam(':ali12', $password);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: addsong.php");
}
else{
    $errmsg_arr[] = 'Username and Password are not found';
    $errflag = true;
}
if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();
}

?>
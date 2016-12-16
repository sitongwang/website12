<?php
session_start();

?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul style="padding:0; color:red;">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
        echo '<li>',$msg,'</li>'; 
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
    <link rel="stylesheet" type="text/css" href="css/reset-css.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script> 
    $(function(){
      $("#header").load("header.html"); 
      $("#footer").load("footer.html"); 
    });
    </script> 

</head>
<body>
<div id ="header"></div>

<div id='defaultuser'>Please use the default username and password<br/>Username: user <br/>Password: user</div>

<div>
	<form class="webform" action="validate.php" method="POST">
	<div id='box'>
    <h1>Log In</h1>
    </div>
    <label>
    <span >Name</span>
    <input id="name" class="box" type="text" name="uname"/>
    </label>
    <label>
    <span>Password</span>
    <input id="password" class="box" type="password" name="pass"/>
    </label>

    <label>
    <input type="submit" class="button" value="Log In" />
    </label>
    </form>
</div>

<div id="footer"></div>

</body>
</html>
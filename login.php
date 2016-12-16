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
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		position: relative;
	}
body {
    background-color: #fff;
    color: #777;
    font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
}
img {
    width: 100px;
    height: 60px;
}

header {
    height: 120px;
}

header h1 {
    float: left;
    margin-top: 32px;
}

header h1 .color {
    color: #36D7B7;
}

header nav {
    float: right;
}

header nav ul li {
    float: left;
    display: inline-block;
    margin-top: 50px;
}

header nav ul li a {
    color: #444;
    text-transform: uppercase;
    font-weight: bold;
    display: block;
    margin-right: 20px;
}

h1 {
    font-family: 'Crete Round', serif;
    font-weight: bold;
    color: #444;
    font-size: 45px;
    margin-bottom: 20px;
}

a {
    text-decoration: none;
    color: #444;
}

strong {
    font-weight: bold;
}

a:hover {
    color: #36D7B7;
}

    .webform {
        margin-left:auto;
        margin-right:auto;
        max-width: 550px;
        background: #F7F7F7;
        padding: 25px 15px 25px 10px;
        font: 14px Georgia, "Times New Roman", Times, serif;
        color: #888;
        text-shadow: 1px 1px 1px #FFF;
        border:1px solid black;
        margin-top: 60px;
        margin-bottom: 200px;
        height: 360px;
    }
    .webform h1 {
        font-size: 35px;
        padding: 0px 0px 10px 40px;
        display: block;
        margin: 20px 15px -10px -15px;;
        color: black;
        height: 150px;
        text-align: center;
    }
    .webform label {
        display: block;
        margin: 0px;
    }
    .webform label>span {
        float: left;
        width: 20%;
        text-align: right;
        padding-right: 10px;
        margin-top: 25px;
        color:black;
    }
    .webform input[type="text"], .webform input[type="password"] {
        border: 1px solid black;
        color: #41556A;
        height: 30px;
        margin-bottom: 16px;
        margin-right: 52px;
        margin-top: 17px;
        outline: 0 none;
        padding: 3px 3px 3px 5px;
        width: 60%;
        font-size: 12px;
        line-height:15px;
    }

    .webform .button {
        position: relative;
        background:#11efba;
        border: none;
        width: 150px;
        height: 50px;
        padding: 10px 25px 10px 25px;
        margin-top: 20px;
        margin-left: 310px;
        color: #FFF;
        font-size: 16px;
    }
    
    .webform .button:hover {
        background: #333333;
    }
    #box{
     	display: block;
        border-bottom:1px solid #E4E4E4;
        margin: -10px -15px 30px -10px;;
        color: black;
        height: 70px;
    } 
    
     /*not work*/
    @media screen and(max-width: 400px){
     #box span  { 
        display: none;

     }
    } 
    
    #defaultuser{
        margin-top: 140px;
        text-align: center;
        align-content: center;

    }

        /*footer*/

footer{
        width: 100%;
        height: 300px;
        background-color:white;
        border: 2px black solid;
    }
#logo{
    width: 110px;
    height: 65px;
    margin: 0 auto;
    object-position: center;
    margin-top:35px; 
}

#p {
    margin-top:-20px;
    color: black;
    position: relative;
    margin-left:50px;
}

#link{
    width: 450px;
    color: black;
    margin: 0 auto;
    object-position: center;
    display: flex;
    font-size: 14px;
    margin-top: 100px;
    font-family: OpenSans-Regular,Arial;
}

#link1 {
    margin-top:10px;
    color: black;
    position: relative;
    flex:left;
    margin-left: 25px;
    
}

#link2{
    margin-top:10px;
    color: black;
    position: relative;
    flex:left;
    margin-left: 25px;
}

#link3{
    margin-top:10px;
    margin-left: 
    color: black;
    position: relative;
    flex:left;
    margin-left: 25px;
}

#link4{
    margin-top:10px;
    margin-left: 
    color: black;
    position: relative;
    flex:left;
    margin-left: 25px;
}

.icon{
    width: 30px;
    height: 30px;
    display:block;
}

.iconrow{
  float: right;
  display: flex;
  flex-direction:column;
  width: 50px;
  height: 100px;
  margin-right: 30px;
  margin-top: -150px; 
}

.icon-div {
    margin-top: 0px;
    margin-right: 30px;
    float: right;
    width:30px;
    height: 30px;
    display: inline-block;
    padding: 0px;
    display:block;
    margin-bottom:15px;
  }

</style>
</head>
<body>
<header>
        <h1>DJ This.<span class="color">.</span>
        <img src="assets/DJT_logo.png"></h1>
        <nav>
            <ul>
                <li><a href="landingpage.html">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="choose_artist.html">Artists</a></li>
                <li><a href="#">Log In</a></li>
            </ul>
        </nav>
    </div>
    </header>

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

<footer>
<div id="logo"><img id="logo" src="assets/DJT_logo.png"></div>
<div id="link">
  <div id="link1" ><h4>ABOUT</h4></div>
  <div id="link2" ><h4>CONTACT US</h4></div>
  <div id="link3"><h4>TERM&CONDITIONS</h4></div>
  <div id="link4"><h4>PRIVACY</h4></div>
</div>
<div id="p"><p>@Design by Ali, Paul and Christy.</p></div>

  <div class="iconrow"> 
  <div class='icon-div'><img src="assets/facebook.png" class="icon"></div>
  <div class='icon-div'><img src="assets/twitter.png" class="icon"></div>
  <div class='icon-div'><img src="assets/youtube.png" class="icon"></div>
  <div class='icon-div'><img src="assets/instagram.png" class="icon"></div>
 </div>
</footer>




</body>
</html>
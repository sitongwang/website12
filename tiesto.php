<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zh">
<head>
<title>TIESTO</title>

 <link rel="stylesheet" type="text/css" href="css/playlist.css">

</head>
<body>

<header>

<h1>DJ This.<span class="color">.</span>
    <img src="DJT_logo.png"></h1>
    <nav>
      <ul>
        <li><a href="landingpage.html">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="choose_artist.html">Artists</a></li>
        <li><a href="../login.php">Log In</a></li>
      </ul>
    </nav>
</header>

<div id="a">

<div id="form"><h3>TIESTO</h3></div>

<img id="cover" src="assets/header1.jpg">
</div>
<div id="b">

<?php
// create a PDO (PHP Data Object)
// specifies the db type, host, db name, character set, username and password
$db = new PDO('mysql:host=localhost;dbname=DjT; charset=utf8', 'root', 'root');
echo "<table name= 'displayTable' id='displayTable' border='1' cellspacing='10' background-color='black' color='white'> ";
echo "<tr><th>SONG NAME</th><th>ARTIST</th><th>GENRE</th><th>VOTE</th></tr>";
$result = $db->prepare("SELECT * FROM songs WHERE artist LIKE '%tiesto%' ;");
$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
  $sname = $row['sname'];
  $artist = $row['artist'];
  $genre= $row['genre'];
  
  echo "<tr>";
  echo "<td class='displayField1'> " .$sname . "</td><td class='displayField2'>". $artist . "</td><td class ='displayField3'>". $genre ."</td><td class ='displayField4'>".$vote . "<form action='' method='post'>
  <input type='submit' name='up' value='↑'/>
  <input type='submit' name='down' value='↓'/>
</form></td>";

// if (isset($_POST['up'])) {

  

// }


  echo "</tr>";
}

  echo "</table>";


?>
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
</div>

</body>
</html>

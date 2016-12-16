<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zh">
<head>
<title>Playlist</title>

 <!-- <link rel="stylesheet" type="text/css" href="css/playlist.css"> -->
 <link rel="stylesheet" type="text/css" href="css/artists.css">
 <link rel="stylesheet" type="text/css" href="css/footer.css">
 <link rel="stylesheet" type="text/css" href="css/header.css">

    
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>

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

<div id="a">

<div id="form"><h3>Playlist</h3></div>

<img id="cover" src="assets/header1.jpg">
</div>
<div id="b">

<?php
// create a PDO (PHP Data Object)
// specifies the db type, host, db name, character set, username and password
$db = new PDO('mysql:host=localhost;dbname=DjT; charset=utf8', 'root', 'root');
echo "<table name= 'displayTable' id='displayTable' border='1' cellspacing='10' background-color='black' color='white'> ";
echo "<tr><th>SONG NAME</th><th>ARTIST</th><th>GENRE</th><th>VOTE</th></tr>";
$result = $db->prepare("SELECT * FROM songs");
$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
  $sname = $row['sname'];
  $artist = $row['artist'];
  $genre= $row['genre'];
  
  echo "<tr>";
  echo "<td class='displayField1'> " .$sname . "</td><td class='displayField2'>". $artist . "</td><td class ='displayField3'>". $genre ."</td>";
  echo "</tr>";
}

  echo "</table>";


?>
<div id="footer"></div>
</div>

</body>
</html>

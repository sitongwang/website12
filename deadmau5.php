<?php
session_start();
?>


<!DOCTYPE html>
<html lang="zh">
<head>
<title>DEADMAU5</title>

 

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
<div id="header"></div>
<div id="headerontop">

<h3>DEADMAU5</h3>

<?php
// create a PDO (PHP Data Object)
// specifies the db type, host, db name, character set, username and password
$db = new PDO('mysql:host=localhost:3306 ;dbname=spryp_DjT; charset=utf8', 'spryp_spryp', '565656spry!1');
echo "<table name= 'displayTable' id='displayTable' border='1' cellspacing='10' background-color='black' color='white'> ";
echo "<tr><th>SONG NAME</th><th>ARTIST</th><th>GENRE</th><th>VOTE</th></tr>";
$result = $db->prepare("SELECT * FROM songs WHERE artist LIKE '%deadmau5%' ORDER BY votes DESC");

$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
  $sname = $row['sname'];
  $artist = $row['artist'];
  $genre= $row['genre'];
  $vote = $row['votes'];
  
  echo "<tr>";
  echo "<td class='displayField1'> " .$sname . "</td><td class='displayField2'>". $artist . "</td><td class ='displayField3'>". $genre ."</td><td class ='displayField4'>".$vote . "<form action='' method='post'><input type='submit' name='up' value='↑'/>
  <input type='submit' name='down' value='↓'/></form></td>";



}

  echo "</table>";

 if (isset($_POST['up'])) {
  //$row = $result->fetch(PDO::FETCH_ASSOC)
   //$vote = $row['votes'];

      $result = $db->prepare("UPDATE songs SET votes = votes + 1 WHERE songid");

      //$result->bindParam('songid', $_POST['up'], PDO::PARAM_INT);

      $result->execute();
  }

   if (isset($_POST['down'])) {
  //$row = $result->fetch(PDO::FETCH_ASSOC)
   //$vote = $row['votes'];

      $result = $db->prepare("UPDATE songs SET votes = votes - 1 WHERE songid");

      //$result->bindParam('songid', $_POST['up'], PDO::PARAM_INT);

      $result->execute();
  }





?>


<div id="footer"></div>
</div>
</body>
</html>

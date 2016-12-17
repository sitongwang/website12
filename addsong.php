<?php
session_start();
?>

<style type="text/css">
  #b1{
    width: 350px;
    height:450px;
    display: block;
    float: left;
    margin-left: 250px;
    margin-top:150px;
      background-image: url(assets/artist1.jpg);
      background-size:350px 450px;
        background-repeat:no-repeat;
        z-index: 2;
  }
  #b2{
    width: 350px;
    height:450px;
    margin-right:250px;
    margin-top:190px; 
    float: right;
    background-image: url(assets/artist2.jpg);
    background-size:350px 450px;
        background-repeat:no-repeat;
        z-index: 2;  
  }

  
</style>
<!DOCTYPE html>
<html lang="zh">
<head>
<wrapper>
<title>Add song</title>
    <link rel="stylesheet" type="text/css" href="css/addsong.css">
    <link rel="stylesheet" type="text/css" href="css/mediaqueries.css">
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


<!-- <div id="a"> -->



<div id="cover" >

  <div id="form">
  <h3>Add Songs</h3>

  <form id="add" action='addsong2.php' method='post'>
  <label for = "sname"></label> <input type='text' name='sname' id='sname' placeholder="Song Name" required />
  <label for ="artist"></label> <input type='text' name='artist' id ='artist' placeholder="Artist" required/>
  <label for ="genre"></label> <input type='text' name='genre' id ='genre' placeholder="Genre" required/>
  <button type='submit' id='btnSubmit' name='btnSubmit'>Add</button>
  </form>

  </div>


</div>
  

<!-- </div> -->
  

<div id="b">

<?php
// create a PDO (PHP Data Object)
// specifies the db type, host, db name, character set, username and password
$db = new PDO('mysql:host=localhost:3306 ;dbname=spryp_DjT; charset=utf8', 'spryp_spryp', '565656spry!1');

echo "<table name= 'displayTable' id='displayTable' border='1' cellspacing='5'> ";
echo "<tr><th>SongName</th><th>Artist</th><th>Genre</th></tr>";

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
</div>
</wapper>

<div id="footer"></div>
</body>
</html>

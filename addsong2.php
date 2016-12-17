<?php

	$db_username ='root';
	$db_password = 'root';
	$db = new PDO('mysql:host=localhost:3306 ;dbname=spryp_DjT; charset=utf8', 'spryp_spryp', '565656spry!1');
	//$db = new PDO('mysql:host=localhost:3306;dbname=shoepedia', $db_username, $db_password);


	$form = $_POST;

	$sname = $form['sname'];
	$artist = $form['artist'];
	$genre = $form['genre'];

	$sql = "INSERT INTO songs (sname,artist,genre) VALUES (:sname,:artist,:genre)";

	$query = $db->prepare($sql);
	$query->execute (array(':sname'=>$sname, ':artist'=>$artist, ':genre'=>$genre));

	header("Location: addsong.php");


?>
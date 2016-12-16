<style type="text/css">
    h1{
        text-align: center;
    }
    .r1{
        font-size: 18px;
        float: center;
        margin-top: 250px;
        margin-left: 360px;
        width: 500px;
        height: 80px;
        border: 2 solid black;
        background-color: #11efba;
        margin-top: 3px;
        text-align: center;
    }
/*
    .r2{
        text-align: left;
        font-size: 24px;
        margin-top: 50px;
        line-height: 40px;
        margin-left: 70px; 
    }
*/    /*footer*/

footer{
        width: 100%;
        height: 300px;
        background-color:white;
        border: 2px  solid;
        margin-top: 130px;
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
<head>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
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

<h1>Thanks for Your Message!</h1>
<br>
<br>
<?php

$db = new PDO("mysql:host=localhost;dbname=DjT","root","root");

if( isset($_GET['namecf']) && $_GET['namecf'] != "" ) {
    $sql = "INSERT INTO `contact_form` (namecf,emailcf,messagecf) VALUES ( :namecf,:emailcf,:messagecf);";
    
    $stmt = $db->prepare( $sql );
    $stmt->bindParam( ":namecf" , $_GET['namecf'] );
    $stmt->bindParam( ":emailcf" , $_GET['emailcf'] );
    $stmt->bindParam( ":messagecf" , $_GET['messagecf'] );
    $result = $stmt->execute();
}

// select all dealers
$sql = "SELECT namecf,emailcf,messagecf FROM contact_form";
$stmt = $db->prepare( $sql );
$stmt->execute();
$data = $stmt->fetchAll();

foreach( $data as $row ) {
    
    echo "<div class='r1'>";
    echo "<div class='r2'>";
    echo "Welcome".","."  ". $row['namecf'];
    echo "<br>";
    echo "Your Email is"."  ". $row['emailcf'];
    echo "<br>";
    echo "Message:"."  ". $row['messagecf'];
    echo "</div>";
    echo "</div>";

}


?>

<div id="footer"></div>
</body>
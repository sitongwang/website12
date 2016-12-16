<!DOCTYPE html>
<html>
<head>
    <title>contact form</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
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

<div>
    <form class="webform" method='get' action='contact-result.php' >
    <div id='box'>
    <h1>Contact Form</h1>
    </div>
    <label>
    <span id="a">Name :</span>
    <input id="namecf" type="text" name="namecf" placeholder="Your Full Name" />
    </label>
    <label>
    <span>Email :</span>
    <input id="emailcf" type="text" name="emailcf" placeholder="Valid Email Address" />
    </label>
    <label>
    <span >Message:</span>
    <input id="messagecf" type="text" name="messagecf" placeholder="Type here" />
    </label>
    <label>
    <input type="submit" class="button" value="Submit" />
    </label>
    </form>

</div>

<div id="footer"></div>

</body>
</html>
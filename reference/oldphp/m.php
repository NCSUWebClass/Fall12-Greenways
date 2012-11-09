<?php
$appname = 'mobileDemo';
setcookie("mobileCookie", $appname, time()+60*60*24*365); // set cookie to expire in one year
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mobile site</title>

<!--Meta cluster-->
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"> 

</head>
<body>
<h1>You are on a mobile device... in theory.</h1>

<?php
if(isset($_COOKIE['mobileCookie'])){
	echo 'mobile cookie is set';
}
?>

<p><a href="index.php?view=full">view regular site</a></p>
</body>
</html>
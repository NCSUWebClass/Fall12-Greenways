<?php

if($_GET['view'] === 'full'){
	/* Delete mobile cookie  - uncomment to delete the mobile cookie when viewing full site*/
	//setcookie ("mobileCookie", "", time() - 3600);
} else {
	
	/* Check to see if the "desktop" cookie has been set in the past */
	if(isset($_COOKIE['desktopCookie'])){
		echo '<p>desktop cookie is set</p>';
	
	/* Check to see if the "mobile" cookie has been set, if so forward to the mobile site */
	} else if(isset($_COOKIE['mobileCookie'])){
		header('Location: m.php?source=cookie');
		
	/* If no cookies are set, run the function and forward as appropriate */
	} else {
		include('mobile_detection.php');
		mobile_device_detect(true,true,true,true,true,true,'m.php?source=function',false);
	
		/* if it makes it this far, set the desktop cookie */
		$appname = "mobileDemo";
		setcookie("desktopCookie", $appname, time()+60*60*24*365); // set cookie to expire in one year
	}
}

/*
	Default function values
	$iphone=true,
	$android=true,
	$opera=true,
	$blackberry=true,
	$palm=true,
	$windows=true,
	$mobileredirect=false (the URL),
	$desktopredirect=false
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Desktop</title>
</head>
<body>
<?php
if($_GET['view'] === 'full'){
	echo '<h1>You came from a mobile device, but want to see the full version</h1>' . "\n";
	echo '<p><a href="index.php">reload</a></p>';
} else {
	echo '<h1>You are on a desktop... I\'m 90% sure.</h1>';
}
?>
</body>
</html>
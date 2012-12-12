<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>WS Greenways</title>
		<link href="themes/myTheme.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile.structure-1.0.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
        <!--the 2 js files below are for the email to work -->
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="ajax.js"></script>
    	<link href="css/newStylesheet.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div data-role="page" data-theme="a" id="home">
			<div class="logo" data-role="header" data-position="inline">
				<h1 class="logoName">
					WS Greenways<br/>
					<span class="black">
						Winston-Salem, NC
					</span>
				</h1>
			</div>
			<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#home">HOME</a>
					</li>
					<li>
						<a href="#greenways">GREENWAYS</a>
					</li>
					<li>
						<a href="#events">EVENTS</a>
					</li>
				</ul>
			</nav>
			<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
			</nav>
				  
			<!-- This is the HOME page -->
			<div data-role="content" data-theme="a" class="contentBox">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b3778509f6e554593&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=36.114581,-80.261307&amp;spn=0.133128,0.219727&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b3778509f6e554593&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=36.114581,-80.261307&amp;spn=0.133128,0.219727" style="color:#0000FF;text-align:left">Current WS Greenways</a> in a larger map</small>
				<p><b style="color:#630">WS Greenways</b> is a citizen advocacy group working to get more people onto the ten greenways found throughout Winston-Salem.  Our goal is a city-wide network of trails connecting destinations for work, play, school, shopping and more.</p>
				<p>This mobile site provides information about each greenway/trail and accessibility to it, as well as a Google map. Upcoming events on the greenways are also provided.</p>
				<img src="images/about.jpg" width="285" height="83" alt="About">
				<img src="images/extra.jpg" width="285" height="83" alt="Extra">
				<img src="images/newellMassey.jpg" width="285" height="83" alt="NewellMassey">
				<img src="images/silasCreek.JPG" width="285" height="84" alt="SilasCreek">
				<img src="images/gateway.jpg" width="285" height="84" alt="Gateway">
				<img src="images/header_2.jpg" width="285" height="85" alt="Header">
				</div><!--content-->
			</div><!--page-->
			
			<!--This is the GREENWAYS page -->
			<div data-role="page" data-theme="a" id="greenways">
				<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/><span class="black">Winston-Salem, NC</span></h1>
				</div>
				<nav data-role="navbar" data-theme="a">
					<ul class="navLinks">
						<li>
							<a href="#home">HOME</a>
						</li>
						<li>
							<a href="#greenways">GREENWAYS</a>
						</li>
						<li>
							<a href="#events">EVENTS</a>
						</li>
					</ul>
				</nav>
				<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
			</nav>
		  		<div data-role="content" data-theme="a" class="contentBox">
					<h3>Current Greenways</h3>
					<br/>
					<ul data-theme="b" data-role="listview" class="greenLinks">
<?php
	require_once('includes/connection.php');
	
	date_default_timezone_set("EST");
	
	$cn_lengthtext = "Length";
	$cn_name = "Name";
	$cn_mapurl = "Map_URL";
	$cn_endpoints = "Endpoints";
	$cn_surface = "Surface";
	$cn_terrain = "Terrain";
	$cn_navigation = "Navigation";
	$cn_parking = "Parking";
	$cn_amenities = "Amenities";
	$cn_nearbyamenities = "Nearby_Amenities";
	$cn_connections = "Connections";
	$cn_mid = "MID";
	$cn_accessibility = "Accessibility";
	$cn_lengthinmiles = "LengthInMiles";
	
	$result = mysql_query("SHOW COLUMNS FROM Greenways;");

	$attributes = array();
	while($row = mysql_fetch_array($result)) {
		$attributes[sizeof($attributes)] = $row['Field'];
	}
	
	$result = mysql_query(sprintf("SELECT %s FROM  Greenways ORDER BY MID ASC", join($attributes, ", ")));

	while($row = mysql_fetch_array($result)) {

		$accessibility = $row[$cn_accessibility];
		$length = sprintf("%.2f miles.", $row[$cn_lengthinmiles]);
		$lengthText = $row[$cn_lengthtext];
		$mapURL = $row[$cn_mapurl];
		$name = $row[$cn_name];
		
		if($lengthText != null)
			$length = sprintf("%s %s", $length, $lengthText);
		
		printf("						<li>\n");
		printf("							%s", $name);
		printf("							<ul>\n");
		printf("								<h3>%s</h3>", $name);
		#printf("								<br/>\n");
		printf("								<li>\n");
		printf("									<a href=\"%s\">%s  Map</a>\n", $mapURL, $name);
		printf("								</li>\n");
		printf("								<li>\n");
		printf("									%s Info\n", $name);
		printf("									<ul class=\"trailInfo\">\n");
		
		for($i=0;$i<sizeof($attributes);$i++) {
			$attribute = null;
			$doit = false;
			
			switch(strtolower($attributes[$i])) {
			case $cn_lengthtext:
				$attribute = $length;
				break;
			default:
				$attribute = $row[$attributes[$i]];
				break;
			}
			
			switch($attributes[$i]) {
			case $cn_lengthtext:
			case $cn_name:
			case $cn_endpoints:
			case $cn_surface:
			case $cn_terrain:
			case $cn_navigation:
			case $cn_parking:
			case $cn_amenities:
			case $cn_nearbyamenities:
			case $cn_connections:
			case $cn_accessibility:
				$doit = true;
				break;
			default:
				$doit = false;
				break;
			}
			
			$attributeLabel = preg_replace('/_/',' ',$attributes[$i]);
			if($attribute != null && $doit) {
				printf("										<li>\n");
				printf("											<span class=\"highlight\">%s:</span>\n", $attributeLabel);
				printf("											%s\n", $attribute);
				printf("										</li>\n");
			}
		}
		
		printf("										<li>\n");
		printf("											<a href=\"#greenways\">Back</a>\n");
		printf("										</li>\n");
		printf("									</ul>\n");
		printf("								<li>\n");
		printf("									<a href=\"#greenways\">Back</a>\n");
		printf("								</li>\n");
		printf("							</ul>\n");
		printf("						</li>\n");
	
	}
?>
					</ul><!--end of main list-->
				</div><!--content-->
			</div><!--page-->
	  
	  		<!--This is the EVENTS page -->
			<div data-role="page" data-theme="a" id="events">
				<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/><span class="black">Winston-Salem, NC</span></h1>
				</div>
				<nav data-role="navbar" data-theme="a" class="navLinks">
					<ul class="navLinks">
						<li>
							<a href="#home">HOME</a>
						</li>
						<li>
							<a href="#greenways">GREENWAYS</a>
						</li>
						<li>
							<a href="#events">EVENTS</a>
						</li>
					</ul>
				</nav>
				<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
			</nav>
				<div data-role="content" data-theme="a" class="contentBox">
					<h3>Upcoming Events</h3>
					<div id="upcomingEvents" >
<?php

	$cn_startdate = "StartDate";
	$cn_starttime = "StartTime";
	$cn_enddate = "EndDate";
	$cn_endtime = "EndTime";
		$cn_location = "Location";
		$cn_description = "Description";

	$result = mysql_query("SHOW COLUMNS FROM Events;");
	
	$attributes = array();
	while($row = mysql_fetch_array($result)) {
		$attributes[sizeof($attributes)] = $row['Field'];
	}

	$result = mysql_query(sprintf("SELECT %s FROM Events ORDER BY StartDate ASC, StartTime ASC", join($attributes, ", ")));
			  
	while($row = mysql_fetch_array($result)) { 

		$dateformat = "m/d/Y";
		$timeformat = "H:i:s";
		
		$startdate = $row[$cn_startdate];
		$starttime = $row[$cn_starttime];
		$enddate = $row[$cn_enddate];
		$endtime = $row[$cn_endtime];
		
		$datestring = "";
		if($startdate != null) {
			$datestring.= date($dateformat, strtotime($startdate));
		}
		if($starttime != null) {
			if($startdate != null) {
				$datestring.= " (";
			}
			$datestring.= date($timeformat, strtotime($starttime));
			if($startdate != null && $enddate == null && $endtime == null) {
				$datestring.= ")";
			}
		}
		if($enddate != null || $endtime != null) {
			if($startdate != null || $starttime != null) {
				$datestring.= " - ";
			}
			if($enddate != null) { 
				$datestring.= date($dateformat, strtotime($enddate));
			}
			if($endtime != null) {
				if($startdate != null && $enddate == null && $starttime == null) {
					$datestring.= " (";
				}
				$datestring.= date($timeformat, strtotime($endtime));
				if($enddate != null || $startdate != null) {
					$datestring.= ")";
				}
			}
		}

		printf("						<p class='eventTime'>%s</p>", $datestring);
		printf("						<p class='eventLocation'>%s</p>", $row[$cn_location]);
		printf("						<p class='eventDescription'>%s</p>", $row[$cn_description]);
				 
	}

	mysql_close($connection);
?>
					</div>
				</div><!--content-->
			</div><!--page-->
		</div>
		
		
<!--This is the FORUM page -->
			<div data-role="page" data-theme="a" id="forum">
				<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/><span class="black">Winston-Salem, NC</span></h1>
				</div>
				<nav data-role="navbar" data-theme="a" class="navLinks">
					<ul class="navLinks">
						<li>
							<a href="#home">HOME</a>
						</li>
						<li>
							<a href="#greenways">GREENWAYS</a>
						</li>
						<li>
							<a href="#events">EVENTS</a>
						</li>
					</ul>
				</nav>
				<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
			</nav>
				<div data-role="content" data-theme="a" class="contentBox">
					<h3>Join Our Discussion and Follow us on:</h3></br>
					<div id="forum" >
					<ul data-theme="b" data-role="listview" class="greenLinks">
					    
                            		<li><a href="http://www.facebook.com/profile.php?id=100002982105804" target="_blank" id="facebook">Facebook</a>    
                              		</li>
							
                            		<li><a href="https://twitter.com/#!/wsgreenways" target="_blank" id="twitter">Twitter</a>    
                              		</li>
                              		
                              		<li><a href="http://www.wsgreenways.org/index.php/emailAddressForm" id="email">Email</a>
					</div>
				</div><!--content-->
			</div><!--page-->

			
<!--This is the ISSUES page -->
			<div data-role="page" data-theme="a" id="issues">
				<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/><span class="black">Winston-Salem, NC</span></h1>
				</div>
				<nav data-role="navbar" data-theme="a" class="navLinks">
					<ul class="navLinks">
						<li>
							<a href="#home">HOME</a>
						</li>
						<li>
							<a href="#greenways">GREENWAYS</a>
						</li>
						<li>
							<a href="#events">EVENTS</a>
						</li>
					</ul>
				</nav>
				<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
				
			</nav>
<div data-role="content" data-theme="a" class="contentBox">
					<h3>Report an Issue:</h3>
					<br/>
					<ul data-theme="b" data-role="listview" class="greenLinks">
						<li>
							Bethabara							
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Bowen Branch
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Gateway Commons
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Muddy Creek
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Newell-Massey
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Peachtree
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Salem Lake
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Salem Creek
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Silas Creek
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
						
						<li>
							Strollway
							<ul>
								<li>
									Dead Animal
								</li>
								<li>
									Electrical Essues
								</li>
								<li>
									Fallen Tree
								</li>
								<li>
									Restroom Issues
								</li>
								<li>
									Suspecious Person
								</li>
								<li>
									Suspecious Activities
								
								</li>
								<li>
									<a href="#issues">Back</a>
								</li>
							</ul>
						</li>
					</ul>
						
						
				</div>
				
			<div data-role="content" data-theme="a" class="contentBox">
					<div id="upcomingEvents" >
					<h3>Call in Option:</h3>
					<a href="tel:3367278000"><img src="images/phone.png"></a>
					</div>
					</div>
					</div>
			
			
			
<!--This is the WEATHER page -->
			<div data-role="page" data-theme="a" id="weather">
				<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/><span class="black">Winston-Salem, NC</span></h1>
				</div>
				<nav data-role="navbar" data-theme="a" class="navLinks">
					<ul class="navLinks">
						<li>
							<a href="#home">HOME</a>
						</li>
						<li>
							<a href="#greenways">GREENWAYS</a>
						</li>
						<li>
							<a href="#events">EVENTS</a>
						</li>
					</ul>
				</nav>
				<nav data-role="navbar" data-theme="a" class="navLinks">
				<ul class="navLinks">
					<li>
						<a href="#forum">FORUM</a>
					</li>
					<li>
						<a href="#issues">ISSUES</a>
					</li>
					<li>
						<a href="#weather">WEATHER</a>
					</li>
				</ul>
			</nav>
			<div data-role="content" data-theme="a" class="contentBox" style="width:425px; border:2px solid green;">
		    <?php
				$doc = new DOMDocument();
				$doc->load("http://weather.yahooapis.com/forecastrss?w=2522292&u=f");
				$channel = $doc->getElementsByTagName("channel");
				foreach($channel as $chnl)
				{
					$item = $chnl->getElementsByTagName("item");
					foreach($item as $itemgotten)
					{
						echo "<b>".$itemgotten->getElementsByTagName("title")->item(0)->nodeValue."</b><br/>";
						$describe = $itemgotten->getElementsByTagName("description");
						$description = $describe->item(0)->nodeValue;
						echo $description;
					}
				}
			?> </div>
	</body>
</html>
<%@page import="wsGreenways.Bean"%>
<%@page import="wsGreenways.dao.BeanDAO"%>
<%@page import="wsGreenways.dao.DAOFactory"%>
<%@page import="wsGreenways.enums.Attribute"%>
<%@page import="wsGreenways.enums.Table"%>
<%@page import="java.util.Calendar"%>
<%@page import="java.sql.Date"%>
<%@page import="java.sql.Time"%>
<%@page import="java.util.Iterator"%>
<%@page import="java.util.LinkedList"%>
<%@page import="java.util.Locale"%>
<%@page import="java.util.TimeZone"%>
<%@page import="java.text.SimpleDateFormat" %>
<%@page import="org.apache.commons.lang.StringEscapeUtils"%>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
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
				  
			<!-- This is the HOME page -->
			<div data-role="content" data-theme="a" class="contentBox">
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
		  		<div data-role="content" data-theme="a" class="contentBox">
					<h3>Current Greenways</h3>
					<br/>
					<ul data-theme="b" data-role="listview" class="greenLinks">
<%

	DAOFactory factory = DAOFactory.getProductionInstance();
	BeanDAO greenwayDAO = new BeanDAO(factory, Table.GREENWAY);
	BeanDAO eventDAO = new BeanDAO(factory, Table.EVENT);

	for (Bean gwb : greenwayDAO.getAllPrimaryTable()) {

		String accessibility = gwb.getAttributeString(Attribute.ACCESSIBILITY);
		String length = String.format("%.2f miles.", gwb.getAttributeFloat(Attribute.LENGTHINMILES));
		String lengthText = gwb.getAttributeString(Attribute.LENGTHTEXT);
		String mapURL = StringEscapeUtils.escapeHtml(gwb.getAttributeString(Attribute.MAPURL));
		String name = gwb.getAttributeString(Attribute.NAME);
				
		if(lengthText != null)
			length = length.concat(String.format(" %s", lengthText));
		
%>
						<li>
							<%=name%>
							<ul>
								<li>
									&nbsp;
								</li>
								<li>
									<a href="<%=mapURL%>"><%=name%>  Map</a>
								</li>
								<li>
									<%=name%> Info
									<ul class="trailInfo">
<%

		for(Attribute ga : Attribute.values()) {

			boolean doit = true;
			String text = null;
			
			switch(ga) {
			case LENGTHTEXT:
				text = length;
				break;
			case ENDPOINTS:
			case SURFACE:
			case TERRAIN:
			case NAVIGATION:
			case PARKING:
			case AMENITIES:
			case NEARBYAMENITIES:
			case CONNECTIONS:
				text = gwb.getAttributeString(ga);
				break;
			default:
				doit = false;
				break;
			}
			
			if(doit && text != null) {
				
%>
										<li>
											<span class="highlight"><%=ga.getName()%>:</span>
											<%=text%>
										</li>
<%
				
			}

		}

%>
										<li>
											<a href="#greenways">Back</a>
										</li>
									</ul>
<%

		if(accessibility != null) {

%>
								<li>
									<%=Attribute.ACCESSIBILITY.getName()%>
									<ul class="trailInfo" data-theme="b">
										<li>
											<%=accessibility%>
										</li>
										<li>
											<a href="#greenways">Back</a>
										</li>	
									</ul>
								</li>
<%

		}

%>
								<li>
									<a href="#greenways">Back</a>
								</li>
							</ul>
						</li>
<%
		
	}

%>
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
				<div data-role="content" data-theme="a" class="contentBox">
					<h3>Upcoming Events</h3>
					<div id="upcomingEvents" >
<%

	for (Bean eb : eventDAO.getAllPrimaryTable()) {

		String daterange = "";
		
		SimpleDateFormat sdfd = new SimpleDateFormat("MMMMMM d");
		SimpleDateFormat sdft = new SimpleDateFormat("h:mm:ssa");
		
		Date startDate = eb.getAttributeDate(Attribute.STARTDATE);
		Time startTime = eb.getAttributeTime(Attribute.STARTTIME);
		
		Date endDate = eb.getAttributeDate(Attribute.ENDDATE);
		Time endTime = eb.getAttributeTime(Attribute.ENDTIME);
		
		if(startDate != null) {
			daterange = daterange + sdfd.format(new Date(startDate.getTime()));
		}
		if(startTime != null) {
			if(startDate != null) {
				daterange = daterange + " (";
			}
			daterange = daterange + sdft.format(new Date(startTime.getTime()));
			if(startDate != null && endDate == null && endTime == null) {
				daterange = daterange + ")";
			}
		}
		if(endDate != null || endTime != null) {
			if(startDate != null || startTime != null) {
				daterange = daterange + " - ";
			}
			if(endDate != null) { 
				daterange = daterange + sdfd.format(new Date(endDate.getTime()));
			}
			if(endTime != null) {
				if(startDate != null && endDate == null && startTime == null) {
					daterange = daterange + " (";
				}
				daterange = daterange + sdft.format(new Date(endTime.getTime()));
				if(endDate != null || startDate != null) {
					daterange = daterange + ")";
				}
			}
		}
		
		String location = eb.getAttributeString(Attribute.LOCATION);
		String description = eb.getAttributeString(Attribute.DESCRIPTION);

%>
						<p class='eventTime'><%=daterange%></p>
						<p class='eventLocation'><%=location%></p>
						<p class='eventDescription'><%=description%></p>
<%

	}

%>
					</div>
				</div><!--content-->
			</div><!--page-->
		</div>
	</body>
</html>
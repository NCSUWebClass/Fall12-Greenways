<%@page import="wsGreenways.enums.GreenwayLocation"%>

<!DOCTYPE html>
<html>
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
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
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
          
<div data-role="content" data-theme="a" class="contentBox">
			
					<p><b style="color:#630">WS Greenways</b> is a citizen advocacy group working to get more people onto the ten greenways found throughout Winston-Salem.  Our goal is a city-wide network of trails connecting destinations for work, play, school, shopping and more.</p>
    				<p>This mobile site provides information about each greenway/trail and accessibility to it, as well as a Google map. Upcoming events on the greenways are also provided.</p>
                    <img src="images/about.jpg" width="285" height="83">
                    <img src="images/extra.jpg" width="285" height="83">
                    <img src="images/newellMassey.jpg" width="285" height="83">
                    <img src="images/silasCreek.JPG" width="285" height="84">
                    <img src="images/gateway.jpg" width="285" height="84">
                    <img src="images/header_2.jpg" width="285" height="85">
        </div><!--content-->
</div><!--page-->
<!--This is the GREENWAYS page -->
<div data-role="page" data-theme="a" id="greenways">
			<div class="logo" data-role="header" data-position="inline">
				<h1 class="logoName">WS Greenways<br/> <span class="black">Winston-Salem, NC</span></h1>
			</div>
            <nav data-role="navbar" data-theme="a">
                      <ul class="navLinks">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#greenways">GREENWAYS</a></li>
                        <li><a href="#events">EVENTS</a></li>
              		</ul>
            </nav>
  <div data-role="content" data-theme="a" class="contentBox">
    
    		<h3>Current Greenways</h3><br/>
    
            <ul data-theme="b" data-role="listview" class="greenLinks">
            
<%

	LinkedList<Greenway> greenways = new LinkedList<Greenway>();
							
	for (GreenwayLocation gw : GreenwayLocation.values()) {
		
		greenways.add(gw);
		
	}

	Iterator<Greenway> giterator = greenways.iterator();
	
	while(giterator.hasNext()) {
		Greenway gw = giterator.next();
%>

					<li>
						<%=gw.getName()%>
						<ul>
							<li>
								&nbsp;
							</li>
							<li>
								<a href="<%=gw.getMapURL()%>"><%=gw.getName()%></a>
							</li>
							<li>
								<%=gw.getName()%> Info
								<ul class="trailInfo" >
								
<%

		for(GreenwayAttribute ga : gw.getAttributes()) {	

%>

                                	<li>
                                		<span class="highlight">
                                			<%=ga.getType().getName()%>
                                		</span>
                               			<%=ga.getValue()%>
                                	</li>

<%

		}

%>

                                	<li>
                                		<a href="#greenways">Back</a>
                                	</li>
								</ul>
								<li>
									Accessibility
                       			  	<ul class="trailInfo" data-theme="b">
	                           			<li>
	                           				<%=gw.getAccessibility()%>
	                           			</li>
	                                   	<li>
	                                   		<a href="#greenways">Back</a>
	                                   	</li>    
                                    </ul>
								</li>
							</li>
						</ul>
					</li>
		
<%
		
	}

%>                     
                                        
            </ul><!--end of main list-->
	</div><!--content-->
</div><!--page-->

<!--This is the CONTACT page  -->      
<div data-role="page" data-theme="a" id="events">
			<div class="logo" data-role="header" data-position="inline">
					<h1 class="logoName">WS Greenways<br/> <span class="black">Winston-Salem, NC</span></h1>
			</div>
            <nav data-role="navbar" data-theme="a" class="navLinks">
              		<ul class="navLinks">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#greenways">GREENWAYS</a></li>
                        <li><a href="#events">EVENTS</a></li>
              		</ul>
            </nav>
		  <div data-role="content" data-theme="a" class="contentBox">
         		 <h3>Upcoming Events</h3>
      	<div id="events" ><p class='title'>NOVEMBER !9</p><p class='copy'>WS Greenways presents a talk by <b>Russ DuBois,</b> executive director of the <b>Creative Corridors Coalition,</b> who will discuss his organization's efforts to make downtown Winston-Salem's roadway infrastructure more attractive and more pedestrian friendly. Please join us! 7 p.m., location TBA. </p><p class='title'>NOVEMBER 3</p><p class='copy'>At the <b>Salem Lake Dam Walk and Talk</b> you can learn about the newly completed dam from engineer Courtney Driver. The walk to the dam will begin at 3 pm at the fishing station. After the talk, everyone is encouraged to either walk or bike the Salem Creek Greenway or Salem Lake Trail, so bring your bike or your walking shoes! Rescheduled from October. For more info, call 336-703-3110
</p><p class='title'>NOVEMBER 4</p><p class='copy'>This week's <b>Community Bike Ride</b> will be backwards, sort of. Instead of starting and ending at Caffe Prada, as usual, riders will start and end at <b>Wake Forest University</b>, with a gelato stop at Caffe Prada along the way. Riders will join Wake students, faculty and staff  to help raise awareness of biking among the WFU community and to draw attention to the need for improved bicycle and pedestrian corridors between WFU and downtown Winston-Salem. The first 25 to sign up will get an official WS Greenways water bottle, and everyone gets a free gelato. The slow-paced, ten-mile ride is open to all. 3 to 5:30 p.m., starting at the ZSR Library on the WFU campus. Sign up <a href='http://pdc.wfu.edu/event/5584/'>here.</a> Co-sponsored by the WFU Institute for Public Engagement.</p><p class='title'>OCTOBER !3</p><p class='copy'>Check out the city's proposed <b>master plan for the quarry site park</b>, which includes the <b>Waughtown Connector Greenway</b> The 200-acre site will be developed for public recreation use while incorporating measures to conserve the unique ecosystem that has developed in and around the water bodies in the old quarry. 10 a.m. to noon at the W.R. Anderson Jr. Recreation Center, 2450 Reynolds Park Road.
</p><p class='title'>OCTOBER 14, 21, 28</p><p class='copy'><b>Winston-Salem Community Bike Ride</b> often includes the city's greenways on its ten-mile route, which changes each Sunday. Everyone is welcome. Rides begin at  Caffe Prada, corner of Broad and Fourth streets. Start times are in flux this month. For more info look <a href='http://www.bikews.com/'>here.</a></p><p class='title'>OCTOBER 16</p><p class='copy'>At its <b>Annual Community Celebration</b>, our friends at the Creative Corridors Coalition and the City of Winston-Salem will unveil the design concepts for the <b>Salem Creek Connector</b>, a roadway that will cross the Salem Creek Greenway as it connects U.S. 52 with downtown. Creative Corridors is working with NCDOT to make the project more aesthetically attractive and reflect the city's devotion to arts, culture and innovation. 5:30 p.m. at Wake Forest BioTech Place, 575 North Patterson Ave.</p><p class='title'>OCTOBER 21</p><p class='copy'><b>2nd Annual Tour de Winston 5K Walk & Tour</b> will take participants over or under 10 of the bridges that
are being re-imagined by the Creative Corridors Coalition in preparation for the massive redevelopment of Business 40 through downtown. You can walk at your own pace or in group led by CCC guides, and you can voice  your ideas for making downtown's corridors more attractive and pedestrian-friendly. Adult entry fee of $15 includes t-shirt, sandwiches from Camino Bakery, snacks from Chad's Carolina Corn, and
admission to the post-walk party featuring music, games and giveaways. Children 12 and under participate for free, and all children who complete the walk will receive a free scoop of frozen custard from Wolfies. Registration at 2 p.m., walk begins at 3, and post-walk party is 4 to 6 @ Corpening Plaza, 231 West First St. </p><p class='title'>OCTOBER 27</p><p class='copy'>If planting trees on the Newell/Massey Greenway this Saturday doesn't sound like your cup of tea, then we've got an excellent alternative for you: You can <b>plant a bush at Bethabara Greenway</b> instead! Our friends at <b>Forsyth Audubon</b> are installing a bird-friendly landscape of berry-bearing native trees and shrubs at the new entrance to Bethabara Greenway, next to Bethabara Moravian Church, 2100 Bethabara Road. If you'd like to help, bring work gloves and tools such as shovels, pitchforks, large watering cans and wheelbarrows, if you have them. If not, just bring yourself, from 10 a.m. to 1 p.m. </p><p class='title'>OCTOBER 27</p><p class='copy'>The second-annual <b>autodrop slingshot</b> lets teams of bicyclists set their own route to reach as many predetermined checkpoints as possible. Checkpoints are within a 50-mile radius of Winston-Salem, or you can choose the 'local yokel' race to stay within Forsyth County. Either way, riders must return within a strict 7-hour limit. We hear that some of the checkpoints involve Winston-Salem's greenways! Details <a href='http://2012slingshot.blogspot.com/p/the-low-down.html'>here.</a></p><p class='title'>OCTOBER 27</p><p class='copy'>This year's <b>Community Roots Day</b> includes <b>tree-planting on the Newell-Massey Greenway</b>. Sponsored by the Community Appearance Commission, Keep Winston-Salem Beautiful, and the City of Winston-Salem Vegetation Management Department, this volunteer tree-planting event has been adding shade, fresh air and extra character to our neighborhoods for twenty years now. It's 9 a.m. to noon. Registration at the ball fields at 2790 New Walkertown Road. If you are interested in participating go to <a href='http://www.cityofws.org/Home/Departments/KeepWinston-SalemBeautiful/Forms/KWSBVolunteerSign-Up'>this link</a>, call 727-8013 or write georges@cityofws.org. </p><p class='title'>OCTOBER 6</p><p class='copy'>WS Greenways will be <b>cleaning up Bushy Fork Greenway</b> as part of the <b>Big Sweep</b>, a community-wide cleanup of local waterways sponsored by Keep Winston-Salem Beautiful. All supplies and lunch are provided. If you want to help, just email us at wsgreenways@gmail.com so we'll know how many lunches to order! Oh yeah, and dress for wading, if you're up to it. Directions: From downtown WS, take Business 40 to the Lowery Street exit. At the end of the ramp, turn right onto Lowery Street. The greenway entrance is 0.8 mile on the right. GPS coordinate 36.094427,-80.218855. </p><p class='title'>OCTOBER 7</p><p class='copy'>At the <b>Salem Lake Dam Walk and Talk</b> you can learn about the newly completed dam from engineer Toneq McCullough. The walk to the dam will begin at 3 pm in the parking lot off Salem Lake Road. After the talk, everyone is encouraged to either walk or bike the Salem Creek Greenway or Salem Lake Trail, so bring your bike!
For more info, call 336-703-3110
</p></div>
      		
               
        
		</div><!--content-->
</div><!--page-->
</body>
</html>
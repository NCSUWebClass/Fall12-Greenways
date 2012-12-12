<?php require("includes/header.php"); ?>
<body id="map">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
			<div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                    <div class="headerImg">
                   	  	<h2>Map of <br/>Current Greenways</h2>
              		</div>
			 </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
		<h2>Map of Current Greenways</h2>
           
  			<div class="container" style="height:530px" >
                    <div class="googleMap">
               		  <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?t=m&amp;vpsrc=6&amp;msa=0&amp;msid=211434024492203917841.0004b3778509f6e554593&amp;ie=UTF8&amp;ll=36.112085,-80.26371&amp;spn=0.133132,0.219727&amp;z=12&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?t=m&amp;vpsrc=6&amp;msa=0&amp;msid=211434024492203917841.0004b3778509f6e554593&amp;ie=UTF8&amp;ll=36.112085,-80.26371&amp;spn=0.133132,0.219727&amp;z=12&amp;source=embed" style="color:#0000FF;text-align:left">Current WS Greenways</a> in a larger map</small>
                            		
              </div><!--.googleMap-->
                            
                            <p class="mapText noIndent" >
   			  				<ul style="width:230px">
                					 			<li><?php echo anchor('bethabara', 'Bethabara Greenway');?></li>
                                              <li><?php echo anchor('bowenBranch', 'Bowen Branch Greenway');?></li>
                                              <li><?php echo anchor('gatewayCommons', 'Gateway Commons Greenway');?></li>
                                              <li><?php echo anchor('muddyCreek', 'Muddy Creek Greenway');?></li>
                                              <li><?php echo anchor('newellMassey', 'Newell-Massey Greenway');?></li>
                              				  <li><?php echo anchor('peachtree', 'Peachtree Greenway');?></li>
                                              <li><?php echo anchor('salemLake', 'Salem Lake Trail');?></li>
                                              <li><?php echo anchor('salemCreek', 'Salem Creek Greenway');?></li>
                                              <li><?php echo anchor('silasCreek', 'Silas Creek Greenway');?></li>
                                              <li><?php echo anchor('strollway', 'The Strollway');?></li>
			  					</ul>
                         <em class="mapsInfo">Click on green lines on map to see name and length of greenways.</em>      
						<em class="mapsInfo"> Click on links above for information on each greenway.</em>
                             </p>
    		</div><!--.container-->
    
<?php require("includes/footer.php"); ?>    
    


<?php require("includes/header.php"); ?>
<body id="salemLake">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                      <div class="headerImg">
                   	  		<h2>Salem Lake<br/> Trail</h2>
              		</div>
            </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
         <h2>Salem Lake Trail</h2>
           
			<div class="container">
            		<div  class="googleMap">
                   			 <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b34971ae1ad6d743a&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=36.099117,-80.179853&amp;spn=0.033289,0.054932&amp;z=14&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b34971ae1ad6d743a&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=36.099117,-80.179853&amp;spn=0.033289,0.054932&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">Salem Lake Trail</a> in a larger map</small>
                </div>
	  						 <span class="imgWrapper"><img src="<?php echo base_url();?>images/photos/salemLake/salemLake_7.jpg" width="220" height="293" alt="salem lake greenway" /><span class="clear"></span></span>
							<p class="mapText">The unpaved Salem Lake Trail is not technically a greenway, yet many bikers, joggers and ramblers consider it a wilder and wetter extension of Salem Creek Greenway. Hugging the 365-acre lake's irregular shoreline, the trail offers shifting views of light on water and, almost always, a glimpse of a heron quietly fishing in the shallows. There is no development beyond the pier, boat launches and fishing station by the dam.</p>
                            <em class="view"> View Slideshow Below</em>
		</div><!--.container-->
                
			<div class="container">
                            <div class="colorBox_long">
                               	<ul>                                   	
                                              <li><strong>Length:</strong> A 7-mile loop.</li>
                                              <li><strong>Surface:</strong> Unpaved, uneven.</li>
                                              <li><strong>Terrain:</strong> Long hills.</li>
                                              <li><strong>Hours:</strong> Sunrise to sunset.</li>
                                               
                                              <li><strong>Parking:</strong> Paved and unpaved lots by the fishing station and picnic area. A gravel lot up the hill on Salem Lake Road is used when the gates to the lake are locked. Also: paved parking at the Linville Road end of the lake; a small unpaved lot at the end of New Greensboro Road, used primarily by horseback riders.</li>
                                              <li><strong>Amenities: </strong>Posted maps, distance markings, benches, bulletin boards. Restrooms and refreshments in the fishing station. Water at Linville Road parking lot. Horses are permitted. Also at the dam end: fishing, boat rentals, picnic tables with grills, playground.</li>
                                              <li><strong>Connects to:</strong> Salem Creek Greenway, Salem Lake Road, Linville Road.</li>
                          	</ul>
                            <p class="disabledIcon">The north side of the trail, though still unpaved, is less hilly than the south side.  </p>
                    		</div><!--.colorBox_long-->
              	</div><!--.container-->
                
               		  <div id="slideshow"> 
                           <div id="up" class="pics">
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_1.jpg" width="500" height="400" alt="Salem Lake Trail" />
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_2.jpg" width="500" height="400" alt="Salem Lake Trail" />
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_3.jpg"width="500" height="400"  alt="Salem Lake Trail"/>
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_5.jpg" width="500" height="400" alt="Salem Lake Trail" />
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_7.jpg" width="500" height="400" alt="Salem Lake Trail"/>
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_8.jpg" width="500" height="400" alt="Salem Lake Trail" />
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_9.jpg"width="500" height="400" alt="Salem Lake Trail" />
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_10.jpg"width="500" height="400"  alt="Salem Lake Trail"/>
                                    <img src="<?php echo base_url();?>images/slideshow/salemLake/salLake_11.jpg" width="500" height="400" alt="Salem Lake Trail"/>
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_4.jpg" width="500" height="400" alt="Salem Lake Trail"/>
                                   
                                </div><!--#up-->
                                <pre><code class="mix">$('#up').cycle({
                                    fx:    'curtainX',
                                    sync:  false,
                                    delay: -2000
                                    });</code></pre>
              		</div><!--#slideshow-->
</div><!--.container  -->  
<?php require("includes/footer.php"); ?>    
    


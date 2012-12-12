<?php require("includes/header.php"); ?>
<body id="strollway">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                      <div class="headerImg">
                   	  	<h2>The Strollway</h2>
              		</div>
            </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
          <h2>The Strollway</h2>
           
			<div class="container">
            		<div  class="googleMap">
                   			 <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b3363d36536ff8627&amp;ie=UTF8&amp;t=m&amp;vpsrc=0&amp;ll=36.089407,-80.245085&amp;spn=0.033293,0.054932&amp;z=14&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b3363d36536ff8627&amp;ie=UTF8&amp;t=m&amp;vpsrc=0&amp;ll=36.089407,-80.245085&amp;spn=0.033293,0.054932&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">The Strollway</a> in a larger map</small>
                </div>
	  						<span class="imgWrapper"><img src="<?php echo base_url();?>images/photos/strollway/strollway.jpg" height="270" width="198" alt="strollway" /><span class="clear"></span></span>
							<p class="mapText">The Strollway begins with a sidewalk tour of Winston-Salem's quirky Trade Street Arts District. A few blocks south, it becomes a tree-lined, curb-free path leading travelers past skyscrapers and fountains, to a deep drop under Business 40, by an old railroad depot, though the corner of an office building, and on to the clapboards and split rails of 18th-century Old Salem. It's a true adventure.    </p>
                              <em class="view"> View Slideshow Below</em>
      						
</div><!--.container-->
                
			<div class="container">
                            <div class="colorBox_long">
                               	<ul>                                   	
                                              <li><strong>Length:</strong> 1.2 miles.</li>
                                              <li><strong>End points:</strong> Downtown and Salem Creek. Begins at Trade and Eighth streets, becoming barrier-free at Second, between Cherry and Liberty. Ends at the traffic circle at Main Street and Salem Avenue.   </li>
                                              <li><strong>Surface:</strong> Paved and gravel in asphalt, with some loose gravel over asphalt.</li>
                                              <li><strong>Navigation:</strong> Pedestrians and cyclist must yield to cross traffic! Numerous street crossings are not marked. Be especially careful at Second Street, First Street, in the parking lots below the Business 40 overpass, Brookstown Avenue, Academy Street, Walnut Street and Salem Avenue.</li>
                                             <li><strong>Parking:</strong> On-street or deck parking downtown; Old Salem Visitor Center (west of Main on Walnut Street); Salem Avenue (behind businesses west of Main).</li>
                                              <li><strong>Amenities: </strong>Posted maps, benches, water fountain (south side of First Street). </li>
                                              <li><strong>Nearby amenities: </strong> Restrooms, water and food in Old Salem Visitor Center (open 9–5 Tue.–Sat.; 12:30–5 Sun. ).</li> 
                                              <li><strong>Connects to:</strong> Food, shopping, entertainment downtown; Children's Museum; Old Salem; Salem Creek Greenway. </li>
                          	</ul>
                            <p class="disabledIcon">When traveled from north to south, the section below Second Street is a pleasant downhill ride. Assistance may be needed for the steep decline just below First Street.</p>
                    		</div><!--.colorBox_long-->
              	</div><!--.container-->
                
               		  <div id="slideshow"> 
                           <div id="up" class="pics">
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_1.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_2.jpg" width="500" height="400"  alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_3.jpg"width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_4.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_5.jpg" width="500" height="400" alt="Strollway" />
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_6.jpg"width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_7.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_8.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_9.jpg"width="500" height="400"  alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_10.jpg"width="500" height="400"  alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_11.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_12.jpg" width="500" height="400" alt="Strollway" />
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_13.jpg"width="500" height="400" alt="Strollway" />
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_14.jpg" width="500" height="400" alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_16.jpg"width="500" height="400"  alt="Strollway"/>
                                    <img src="<?php echo base_url();?>images/slideshow/strollway/stroll_17.jpg" width="500" height="400" alt="Strollway"/>
                                </div><!--#up-->
                                <pre><code class="mix">$('#up').cycle({
                                    fx:    'curtainX',
                                    sync:  false,
                                    delay: -2000
                                    });</code></pre>
              		</div><!--#slideshow-->
</div><!--.container  -->  
<?php require("includes/footer.php"); ?>    
    


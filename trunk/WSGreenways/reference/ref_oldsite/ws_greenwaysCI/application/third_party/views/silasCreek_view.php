<?php require("includes/header.php"); ?>
<body id="silasCreek">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                      <div class="headerImg">
                   	  	<h2 style="margin-top:120px">Silas Creek <br/>Greenway</h2>
              		</div>
            </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
          <h2>Silas Creek Greenway</h2>
           
  				<div class="container">
       			  <div class="googleMap">
                            		<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b2f62b5e90176b81b&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=36.108271,-80.304608&amp;spn=0.016642,0.027466&amp;z=15&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?msa=0&amp;msid=211434024492203917841.0004b2f62b5e90176b81b&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=36.108271,-80.304608&amp;spn=0.016642,0.027466&amp;z=15&amp;source=embed" style="color:#0000FF;text-align:left">Silas Creek Greenway</a> in a larger map</small>
                            </div><!--.googleMap-->
                
                    		<span class="imgWrapper"><img src="<?php echo base_url();?>images/photos/silasCreek/silasCreekTrail.JPG" width="216" height="234" alt="silas Creek greenway" /><span class="clear"></span></span>
						<p class="mapText"> This greenway is convenient to several suburban neighborhoods. Strolling along the actual Silas Creek, one can feel remarkably remote despite being close to busy Silas Creek Parkway.</p>
                        <em class="view"> View Slideshow Below</em>
                            
               	</div><!--.container-->
                
                
                <div class="container">
                				<div class="colorBox_long">
                                        		<ul>                                   	
                                                     	<li><strong>Length:</strong> .81 mile, including a side trail on the west side of the creek.  </li>
                                                        <li><strong>End points:</strong> Yorkshire Road to Robinhood Road. At the Robinhood Road end, a long set of wooden steps leads to the street above.</li>
                                                        <li><strong>Surface:</strong> Asphalt.</li>
                                                        <li><strong>Terrain:</strong> Flat, after hill at parking lot. </li> 
                                                        <li><strong>Parking:</strong> A paved lot at Shaffner Park, off Yorkshire Road. Also on-street parking at Burkeshore Road.</li>
                                                        <li><strong>Amenities:</strong> Portable toilet in parking lot, water fountains, benches, posted map, distance markings, bulletin board.</li>
                                                        <li><strong>Nearby amenities:</strong> Shaffner Park has tennis courts, soccer fields and playground. Sherwood Parcourse, across Silas Creek Parkway, also has portable toilets, benches.</li>
                                                        <li><strong>Connects to:</strong> Sherwood Forest neighborhood, Sherwood Elementary School. An underground walkway gets pedestrians across Silas Creek Parkway.</li>
                                          
                                        </ul>
                                        <p class="disabledIcon">The short but steep hill and street-crossing from the parking lot on Yorkshire Road can be avoided. Drive to the end of Burkeshore Road (off Shoreland Road between Yorkshire and Robinhood) and park on the street.</p>
                                </div><!--.colorBox_long-->
    </div><!--.container-->
                
                <div id="slideshow"> 
                           <div id="up" class="pics">
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_1.jpg" width="500" height="400" />
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_2.jpg" width="500" height="400"  />
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_3.jpg"width="500" height="400"  />
                                   
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_5.jpg" width="500" height="400"  />
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_6.jpg"width="500" height="400"  />
                                    <img src="<?php echo base_url();?>images/slideshow/silasCreek/silasCre_7.jpg" width="500" height="400" />
                            </div><!--#up-->
                                <pre><code class="mix">$('#up').cycle({
                                    fx:    'curtainX',
                                    sync:  false,
                                    delay: -2000
                                    });</code></pre>
              		</div><!--#slideshow-->
</div><!--.container  -->  
<?php require("includes/footer.php"); ?>    
    


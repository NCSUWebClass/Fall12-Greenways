<!--Navigation bar starts here-->
<div id="mainNav">
           <ul id="multi-ddm">
			<li><a href="#" class="default">The Greenways</a>
                    <ul>
                        <li><?php echo anchor('greenway_map', 'Greenways Map', 'class="first"');?></li>
                        <li><?php echo anchor('greenways', 'Current Greenways', 'class="openIcon"');?>
                                    <ul>
                                    		  <li><?php echo anchor('bethabara', 'Bethabara', 'class="first"');?></li>
                                              <li><?php echo anchor('bowenBranch', 'Bowen Branch');?></li>
                                              <li><?php echo anchor('brushyFork', 'Brushy Fork');?></li>
                                              <li><?php echo anchor('gatewayCommons', 'Gateway Commons');?></li>
                                              <li><?php echo anchor('muddyCreek', 'Muddy Creek');?></li>
                                              <li><?php echo anchor('newellMassey', 'Newell-Massey');?></li>
                              				  <li><?php echo anchor('peachtree', 'Peachtree');?></li>
                                              <li><?php echo anchor('salemLake', 'Salem Lake');?></li>
                                              <li><?php echo anchor('salemCreek', 'Salem Creek');?></li>
                                              <li><?php echo anchor('silasCreek', 'Silas Creek');?></li>
                                              <li><?php echo anchor('strollway', 'Strollway');?></li>
									</ul>
            			</li>
            			<li><?php echo anchor('future_greenway', 'Future Greenways', 'class="openIcon default"');?>
                                    <ul>
                                    		                                            <li><?php echo anchor('http://www.cityofws.org/Assets/CityOfWS/Documents/Planning/Maps/Greenway_Map2010_36_cmpsd.pdf', 'The Goal', 'target="_blank"');?></li>
                                        <li><?php echo anchor('http://www.cityofws.org/Assets/CityOfWS/Documents/Planning/Publications/Parks_Greenways/Greenway_Plan_Update_20120514.pdf', 'Greenway Plan', 'target="_blank"');?></li>
                                    </ul>
                        </li>
					</ul>
			</li>
    		<li><a href="#" class="default">What's Happening</a>
            			<ul>
								<li><?php echo anchor('happening', 'News');?></li>
                                <li><?php echo anchor('events', 'Events');?></li>
						</ul>
            </li>
			<li><a href="#" class="default">Trail Tools</a>
						<ul>
								<li><?php echo anchor('rules', 'Rules &amp; Safety','class="first"');?></li>
                                <li><?php echo anchor('access', 'Accessibility');?></li>
                                <li><?php echo anchor('nature', 'Nature');?></li>
                                <li><?php echo anchor('friends', 'Greenway Friends');?></li>
						</ul>
            </li>
           	<li><a  class="longer default" href="#" >My Day on a Greenway</a>
							<ul>
						  			<li><a href="http://www.blog.wsgreenways.org" class="first">Users' Blog</a></li>
                                  	<li><?php echo anchor('gallery', 'Photo Gallery');?></li>
							</ul>
			</li>
	 		<li><a href="#" class="default">Help Us Grow</a>
                   			<ul>
                            	  <li><?php echo anchor('about', 'About Us', 'class="first"');?></li>
                                  <li><?php echo anchor('about#why', 'Why Greenways?');?></li>
                                  <li><?php echo anchor('about#joinus', 'Join Us');?></li>
                                  <li><?php echo anchor('about#advocate', 'Advocate');?></li>
                                  <li><a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=aSndzHtUwEEl89mK16E5uovtaH9NUOsEupQZsOmGH1NZfPrMkADR6_gYAb4&dispatch=5885d80a13c0db1f8e263663d3faee8db2b24f7b84f1819343fd6c338b1d9d60" target="_blank" >Donate</a></li>
                                  <li><?php echo anchor('http://www.cafepress.com/wsgreenways', 'Gift Shop', 'target="_blank"');?></li>
                                 
                                  
                            </ul>
            </li>
		</ul>
</div><!--#navBar-->      	
  						<div id="navigation">
                        	<ul id="secondNav">
                                <li class="winston">Winston-Salem, NC</li>
                                <li class="noLink">Follow us on:</li>
                                <li><a href="http://www.facebook.com/profile.php?id=100002982105804" target="_blank" id="facebook">Facebook</a></li>
                                <li><a href="https://twitter.com/#!/wsgreenways" target="_blank" id="twitter">Twitter</a></li>
                                 <!--<li style="width:75px"><a  href="#" id="dialog_link" target="_blank">Email</a></li>-->
                                <?php 			
									$atts = array(
										  'id'      => 'dialog_link',
										  'width'      => '500',
										  'height'     => '200',
										  'scrollbars' => 'no',
										  'status'     => 'no',
										  'resizable'  => 'no',
										  'screenx'    => '\'+((parseInt(screen.width) - 500)/2)+\'',

										  'screeny'    => '\'+((parseInt(screen.height) - 200)/2)+\''
									);
								?>
								 <li style="width:75px"><?php echo anchor_popup('emailAddressForm', 'Email', $atts);?></li>

                                 
                                 
                                 
                               
                                
                            
					  		</ul>
                      </div><!--#navigation-->
                      
                    
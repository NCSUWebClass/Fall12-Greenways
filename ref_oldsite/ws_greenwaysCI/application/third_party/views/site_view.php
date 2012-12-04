<?php require("includes/header.php"); ?>
<body id="home">
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
            	
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                   		<div class="headerImg">
                             <div class="slideshow">
                              			<img src="<?php echo base_url();?>images/header/header_6.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/current.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/bowen.jpg" width="690" height="205" />
                                        <img src="<?php echo base_url();?>images/header/gateway.jpg" width="690" height="205" />
                                          <img src="<?php echo base_url();?>images/header/friends.jpg" width="690" height="205" />
                                        <img src="<?php echo base_url();?>images/header/header_2.jpg" width="690" height="205" />
                                        <img src="<?php echo base_url();?>images/header/header_3.jpg" width="690" height="205" />
                              			<img src="<?php echo base_url();?>images/header/Strollway.jpg" width="690" height="205" />
                                        <img src="<?php echo base_url();?>images/header/newellMassey.jpg" width="690" height="205" />
                                        <img src="<?php echo base_url();?>images/header/silasCreek.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/muddyCreek.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/map.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/salemCreek.jpg" width="690" height="205" />
                                         <img src="<?php echo base_url();?>images/header/extra.jpg" width="690" height="205" />
                                          <img src="<?php echo base_url();?>images/header/peachtree.jpg" width="690" height="205" />
                                          <img src="<?php echo base_url();?>images/header/header_5.jpg" width="690" height="205" />
                                           <img src="<?php echo base_url();?>images/header/salemLake.jpg" width="690" height="205" />
                                           <img src="<?php echo base_url();?>images/header/header_4.jpg" width="690" height="205" />
                                     
                               </div><!--.slideshow-->
                        
                        
       		  			</div><!--.headerImg-->
		 </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
	<div id="mainContent">
  			            		           
    		
        	<h2>Ribbons of green for our families, our community and the environment.</h2>
          <div class="container">
                    <span class="imgWrapper"><img src="<?php echo base_url();?>images/photos/home_misc/home_1.JPG" width="340" height="453" alt="greenway" /><span class="clear"></span></span>
        <p>Whether you hike, bike, stroll or roll, you'll do so with less traffic and more scenery on a greenway. These "linear parks" offer a pleasurable alternative to busy streets and noisy sidewalks. You can follow a creek or circle a lake. You can breathe deeply, chat with a friend, or play tag with a butterfly. Greenways offer an outing the whole family can enjoy.</p>
					<p>WS Greenways is a citizen advocacy group working to get more people onto the ten greenways found throughout Winston-Salem. We offer this website to help you have a more enjoyable experience on the trail. </p>
                    <p>We are also dedicated to the improvement and expansion of Winston-Salem's twenty-mile greenway system. Our goal is a city-wide network of trails connecting destinations for work, play, school, shopping and more. Please join us in our efforts to make Winston-Salem greener and more pedestrian-friendly.</p>
                    
                   <span class="imgWrapRight" style="margin-right:50px; margin-bottom:15px"><img src="<?php echo base_url();?>images/photos/home_misc/stroll_2.jpg" width="401" height="255" alt="cyclists" /><span class="clear"></span></span>
    		</div><!--.container-->
                    
    		<div class="container" style="margin-top:10px" >
  					<div class="colorBox_long" >
                        <h4>WHAT'S HAPPENING </h4>
                  <?php if (isset($records) && count($records)):
						foreach($records as $record):	?>
                        	<p class="news"><?php echo $record->text; ?></p>
                     <?php endforeach; else: ?>
		  					<div id="blank_gallery">&nbsp;</div>
					<?php endif; ?>
                    </div><!--.colorBox-->
             </div><!--.container-->
<?php require("includes/footer.php"); ?> 
    


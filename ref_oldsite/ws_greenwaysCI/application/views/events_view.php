<?php require("includes/header.php"); ?>
<body id="events">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                      <div class="headerImg"></div>
            </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
  			
            <h2>Upcoming Events</h2>
           <p id="eventLink"> Do you have a greenway-related event you'd like to post? Send us the details <?php echo anchor('contact', 'here');?>.</p>
         
     <div class="container">
                    <div class="container_photos" align="center">
                        
       			   		<img src="<?php echo base_url();?>images/photos/events_2.jpg" width="420" height="424" alt="race" />
                   		<img src="<?php echo base_url();?>images/photos/events_1.jpg" width="420" height="279" alt="muddy creek" />
                   </div><!--.container_photos-->	
        
<div class="colorBox_noLogo">
          <div class="eventsLine"></div>
						   <?php if (isset($events) && count($events)):
                                foreach($events as $event):	?>  
          <h5 class="uploadTitle"><?php echo $event->title; ?></h5>
          <p class="happening"><?php echo $event->copy; ?></p> 
                            <div class="eventsLine"></div>
                            
          <?php endforeach; else: ?>
                          <div id="blank_gallery">&nbsp;</div>
          <?php endif; ?> 
</div><!--.colorBox-->
            </div><!--.container-->
    
  	
    
<?php require("includes/footer.php"); ?>    
    


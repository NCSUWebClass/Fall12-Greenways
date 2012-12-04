<?php require("includes/header.php"); ?>
<body id="gallery">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
<?php require("includes/logo.php"); ?>
<?php require("includes/mainNav.php"); ?>

<div id="content">
	<div id="mainContent">
            		<h2 style="padding-bottom:0px">Photo Gallery</h2>
                   <p id="viewFacebox"> Click on photo to view larger.</p>
                  <p class="submitPhoto"> <?php echo anchor('contact', 'Click here to submit photo.' ); ?></p>
<div class="container" >
 			
            <?php if (isset($entries) && count($entries)):
						foreach($entries as $entry):	?>
            	

                        <div class="photoGal" align="center">
                                <a href="<?php echo base_url();?>uploads/<?php echo $entry->image; ?>"  rel="facebox">
                                	<img border="0" src="<?php echo base_url();?>uploads/copy/<?php echo $entry->image; ?>" />
                                </a>
                           <p> <?php echo $entry->caption; ?></p>
                        </div><!--.photoGal-->
             

                       
          
                    
              <?php endforeach; else: ?>
		  					<!--<div id="blank_gallery">&nbsp;</div>-->
					<?php endif; ?>
</div><!--.container-->
<?php require("includes/footer.php"); ?> 
    


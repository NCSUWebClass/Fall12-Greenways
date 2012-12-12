<?php require("includes/header.php"); ?>
<body id="happening">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
            <div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                      <div class="headerImg"></div>
            </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
  			
            <h2>News</h2>
<?php if (isset($items) && count($items)):
			foreach($items as $item):	?>           
  			<div class="container">
                    <img style=" border:none; margin-right:15px" src="<?php echo base_url();?>/uploadsHap/thumbs/<?php echo $item->image; ?>" />
                    <h5 class="uploadTitle"><?php echo $item->title; ?></h5>
                   	<p class="happening"><?php echo $item->copy; ?></p> 
    		<div class="clear"></div>
            </div><!--.container-->
<?php endforeach; else: ?>
		  <div id="blank_gallery">&nbsp;</div>
		<?php endif; ?>            
    		
    		
    
<?php require("includes/footer.php"); ?>    
    


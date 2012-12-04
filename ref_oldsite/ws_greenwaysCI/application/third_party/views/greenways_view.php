<?php require("includes/header.php"); ?>
<body id="current">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
			<div id="header">
                    <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
                    <div class="headerImg">
                   	  		<h2>Current<br/>Greenways</h2>
              		</div>
			 </div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
		<h2>The Current Greenways</h2>
           
  			<div class="container">
                    <ol style="margin-left:350px; height:400px">
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
                        
                    
                    
                    </ol>
    		</div><!--.container-->
    
<?php require("includes/footer.php"); ?>    
    


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WS Greenways Administrative Area</title>
<link href="<?php echo base_url();?>css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$(".toggle_box").hide();

	$("h2.trigger").toggle(function(){
		$(this).addClass("active"); 
		}, function () {
		$(this).removeClass("active");
	});
	
	$("h2.trigger").click(function(){
		$(this).next(".toggle_box").slideToggle("slow");
	});

});
</script>
<script type="text/javascript">
$(document).ready(function(){
	
	$(".toggle_box2").hide();

	$("h2.trigger2").toggle(function(){
		$(this).addClass("active"); 
		}, function () {
		$(this).removeClass("active");
	});
	
	$("h2.trigger2").click(function(){
		$(this).next(".toggle_box2").slideToggle("slow");
	});

});
</script> 
</head>

<body>
<div id="adminWrapper">
			<h1>Administrative Area of WS Greenways</h1>
          <ul id="adminLinks">
                    <li><?php echo anchor('site', 'Homepage ONLINE' ); ?></li>
          			<li><?php echo anchor('admin', 'Admin Area Home' ); ?></li>
                    <li><?php echo anchor('admin_homepage', 'Homepage Admin' ); ?></li>
                    <li><?php echo anchor('admin_gallery', 'Photo Gallery Admin' ); ?></li>
                    <li><?php echo anchor('admin_happening', 'News Admin' ); ?></li>
                     <li><?php echo anchor('admin_events', 'Events Admin' ); ?></li>
                    <li><?php echo anchor('login/logout', 'LOGOUT'); ?></li>  
          </ul>
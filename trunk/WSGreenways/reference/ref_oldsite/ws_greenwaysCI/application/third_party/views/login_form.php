<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<style type="text/css">

</style>
<link href="<?php echo base_url();?>css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="login">



<div id="login_form">

	<h3>Please login</h3>
    <?php 
	echo form_open('login/validate_credentials');
	echo form_input('username', 'Username');
	echo form_password('password', 'Password');?>
    			<?php $submit = array(
					'name' => 'submit',
					'id' => 'submit',
					'class' => 'submitLogin',
					);	
				?>
    <?php echo form_submit($submit, 'LOGIN');?>
    <?php
	echo anchor('login/signup', 'Create Account');
	echo form_close();
	?>

</div><!-- end login_form-->


</body>
</html>
	
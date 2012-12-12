<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Area</title>
<link href="<?php echo base_url();?>css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="login">
<div id="wrapper">

<div id="login_form">
            <h3>Create an Account!</h3>
            <fieldset>
            <legend>Personal Information</legend>
            <?php
               
            echo form_open('login/create_member');
            
            echo form_input('first_name', set_value('first_name', 'First Name'));
            echo form_input('last_name', set_value('last_name', 'Last Name'));
            echo form_input('email_address', set_value('email_address', 'Email Address'));
            ?>
            </fieldset>
            
            <fieldset>
            <legend>Login Info</legend>
            <?php
            echo form_input('username', set_value('username', 'Username'));
            echo form_input('password', set_value('password', 'Password'));
            echo form_input('password2', 'Password Confirm');?>
            	<?php $submit = array(
					'name' => 'submit',
					'id' => 'submit',
					'class' => 'submitLogin',
					);	
				?>
            <?php echo form_submit($submit, 'Create Acccount');
            ?>
            
            <?php echo validation_errors('<p class="error">'); ?>
            </fieldset>
</div>

</div><!--end of #wrapper-->
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enter your Email</title>
<link href="<?php echo base_url().'css/emailAddress.css';?>" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="emailForm">
	<h4>Enter your email to receive our email updates.</h4>
	<?php if(!empty($errors)){ echo "<p class='error'>".nl2br($errors)."</p>";}?>
            <?php echo validation_errors('<p class="error">'); ?>
<p id='contact_form_errorloc' class='error'></p>
            
			<?php echo form_open('emailAddressForm/send'); ?>
            
                 <?php $emailAddress = array(
                                        'name' => 'emailAddress',
                                        'id'=> 'emailAddress',
                                        'maxlength'   => '80',
                                        'size' => '50'
										 ); ?>
                            <?php echo form_input($emailAddress);?>
                  <?php $submit = array(
                                        'name' => 'submit',
                                        'id'=> 'submit',
                                        'class'   => 'sendButton',
										'type' => 'submit',
										'value' => 'Send'
										 ); ?>
								 <?php echo form_submit($submit);?>
                
            </form>
            <br/> <br/><br/>
            <a href="javascript: self.close()" id="close">Close Window</a>
           </div><!--#emailForm-->
</body>
</html>
<?php require("includes/header.php"); ?>
<body id="contact">
<?php require("includes/topMast.php"); ?>
<div id="wrapper">
<div id="header">
        <div id="logo"><img id="logoImg" src="<?php echo base_url();?>images/logo.jpg" width="265" height="204" alt="logo" /></div>
          <div class="headerImg"></div>
</div><!--#header-->
<?php require("includes/mainNav.php"); ?>
<div id="content">
   <div id="mainContent">
  		<div class="container">		
            <h2>Make Comments, Ask Questions...</h2>		
           <span id="requiredField" >* Required Field</span>
			<?php if(!empty($errors)){ echo "<p class='error'>".nl2br($errors)."</p>";}?>
            <?php echo validation_errors('<p class="error">'); ?>
            <p id='contact_form_errorloc' class='error'></p>
            
            
<?php echo form_open_multipart('email/send', 'id="contactForm"' ); ?>

	
    
						<?php $name_data = array(
                            'name' => 'name',
                            'id' => 'name',
                            'value' => set_value('name'),
                            'size' => '50',
							'class' => 'colorField'
                            );	
                        ?>
               		<span class="row">
                                <p><em class="required">*</em> Name: </p> 
                                <?php echo form_input($name_data); ?>
                                
                    </span>
                    <?php $email = array(
							'name' => 'email',
							'id' => 'email',
							'value' => set_value('email'),
							'size' => '50',
							'class' => 'colorField'
					);	
				?>
                    <span class="row">
                                <p><em class="required">*</em> Email: </p>
                                <?php echo form_input($email); ?>
                    </span>
                    
                     		<?php $phone = array('name' => 'phone',
											'id' => 'phone',
											'value' => set_value('phone'),
											'size' => '15',
											'class' => 'colorField'
											);	
										?>
                 
                    		<?php $message = array(
									'name' => 'message',
									'id' => 'message',
									'value' => set_value('message'),
									'rows' => '6',
									'cols' => '40'
								);	?>
                    <span class="row">
                    		<p>Questions/Comments:</p>
                             <?php echo form_textarea($message); ?>
                    		
                    </span>
                    <span class="row"><p>Would you like to be contacted about volunteering?</p>
           				
                    <input type="radio" name="volunteer" value="yes" <?php echo set_radio('volunteer', 'yes', TRUE); ?> /> Yes
					<input type="radio" name="volunteer" value="no" <?php echo set_radio('volunteer', 'no', FALSE); ?> checked="checked" /> No
                     
                   
</span> 					<?php $userfile = array(
                                        'name' => 'userfile',
                                        'id'=> 'userfile',
                                        'value' => set_value('userfile'),
										'class' => 'colorField' ); ?>
                	  <span class="row">
                    			<p>Upload a photo for the Photo Gallery:</p> <?php echo form_upload($userfile); ?>  
                    </span>
                    <span class="row"><p>Add a caption for the photo:</p>
                                 <?php $caption = array(
                                        'name' => 'caption',
                                        'id'=> 'caption',
                                        'maxlength'   => '100',
                                        'size' => '50',
										'value' => set_value('caption'),
										'class' => 'colorField' ); ?>
                            <?php echo form_input($caption);?>
                    </span>
                    
                     <span class="row">
                     		<img id="captchaImg" src="<?php echo base_url();?>captcha_code_file.php?rand=<?php echo rand(); ?>"/>
                     </span>
  					 <span class="row">
                    		<p>Enter the captcha code above here: </p> 
  							<?php $code = array(
									'name' => '6_letters_code',
									'id' => '6_letters_code',
									'class' => 'colorField',
									'value' => set_value('6_letters_code')
								);?>
		<?php echo form_input($code); ?>
        			<p id="smallText">&nbsp;&nbsp;Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh
          			</p>
                     <span class="row">
                                 <input class="cancelButton" name="reset" type="reset" value="Cancel" />
                                 <!--<input class="sendButton" name="submit" type="submit" value="Send" />-->
                                 <?php $submit = array(
                                        'name' => 'upload',
                                        'id'=> 'upload',
                                        'class'   => 'sendButton',
										'type' => 'submit',
										'value' => 'Send/Upload'
										 ); ?>
								 <?php echo form_submit($submit);?>
                     </span>
                
                </form>
<!--   I need to LEAVE THIS DIV below for the captcha -->
                     
           <div class="captcha">
           				
            </div>                    

<script language='JavaScript' type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaImg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
</script>

    		
   		
</div><!--.container -->   
<?php require("includes/footer.php"); ?>    
    


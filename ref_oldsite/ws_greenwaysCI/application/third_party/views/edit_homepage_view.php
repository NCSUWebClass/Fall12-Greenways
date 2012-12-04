<?php require("includes/headerAdmin.php"); ?>

        <h3 align="center">    Gallery EDIT Page: </h3>  
    	

              
      
     <p>Do not leave blank. If you want to remove caption, add a hifen(-).   </p>    
                           	
                  <?php if (isset($images)):	foreach($images as $image): ?> 
                           <?php echo form_open('edit_homepage/edit'); ?>
                                  <?php $text_data = array(
                                        'name' => 'text',
                                        'id'=> 'text',
										 'value'=> $image->text,
										'rows'   => '8',
                                        'cols' => '110' ); ?>
                            <?php echo form_textarea($text_data);?>
                                     
                               <?php echo form_hidden('id', $image->id);?> 
                              
                       
                         <p><?php echo form_submit('submit', 'Save');?></p>
           
            			<?php echo form_close() ;?>
            <?php endforeach; ?>
                    
                    <?php else : ?>
                    
    <p class="attention">No records were returned.</p>
                            
                    <?php endif; ?>
        
                       
</div><!--end of #adminwrapper-->
</body>
</html>

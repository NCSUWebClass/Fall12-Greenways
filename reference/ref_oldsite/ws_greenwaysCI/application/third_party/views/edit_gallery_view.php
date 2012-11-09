<?php require("includes/headerAdmin.php"); ?>

        <h3 align="center">    Gallery EDIT Page: </h3>  
    	

              
      
     Do not leave blank. If you want to remove caption, add a hifen(-).       
                    <br/><br/>       	
                  <?php if (isset($entries)):	foreach($entries as $entry): ?> 
                           <?php echo form_open('edit_gallery/edit'); ?>
                                 <?php            
									  $caption_data = array(
                                            'name' => 'caption',
                                            'value'=> $entry->caption,
                                            'maxlength'   => '100',
                                            'size' => '30' ); 
                                     echo form_input($caption_data);?>
                                     
                               <?php echo form_hidden('id', $entry->id);?> 
                                <?php echo form_hidden('image', $entry->image);?> 
                       
                         <p><?php echo form_submit('submit', 'Save');?></p>
           
            			<?php echo form_close() ;?>
            <?php endforeach; ?>
                    
                    <?php else : ?>
                    
    <p class="attention">No records were returned.</p>
                            
                    <?php endif; ?>
        
                       
</div><!--end of #adminwrapper-->
</body>
</html>

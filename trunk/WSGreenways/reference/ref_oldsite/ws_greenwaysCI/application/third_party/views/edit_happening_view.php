<?php require("includes/headerAdmin.php"); ?>

        <h3 align="center">    Gallery EDIT Page: </h3>  
    	

              
      
     Do not leave blank. If you want to remove caption, add a hifen(-).       
                   <br/><br/>         	
                  <?php if (isset($images)):	foreach($images as $image): ?> 
                           <?php echo form_open('edit_happening/edit'); ?>
                                 <?php            
									  $title_data = array(
                                            'name' => 'title',
                                            'value'=> $image->title,
                                            'maxlength'   => '100',
                                            'size' => '30' ); 
                                     echo form_input($title_data);?>
                                <br/><br/>     
                               <?php $copy_data = array(
                                        'name' => 'copy',
                                        'id'=> 'copy',
										'value'=> $image->copy,
										'rows'   => '25',
                                        'cols' => '110' ); ?>
                            <?php echo form_textarea($copy_data);?> 
                                 
                               <?php echo form_hidden('id', $image->id);?> 
                                <?php echo form_hidden('image', $image->image);?> 
                       
                         <p><?php echo form_submit('submit', 'Save');?></p>
           
            			<?php echo form_close() ;?>
            <?php endforeach; ?>
                    
                    <?php else : ?>
                    
    <p class="attention">No records were returned.</p>
                            
                    <?php endif; ?>
        
                       
</div><!--end of #adminwrapper-->
</body>
</html>

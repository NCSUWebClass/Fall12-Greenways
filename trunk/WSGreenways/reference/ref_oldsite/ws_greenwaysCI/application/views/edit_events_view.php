<?php require("includes/headerAdmin.php"); ?>

        <h3 align="center">    Gallery EDIT Page: </h3>  
    	

              
      
     Do not leave blank. If you want to remove caption, add a hifen(-).       
                  <br/><br/>         	
                  <?php if (isset($events)):	foreach($events as $event): ?> 
                           <?php echo form_open('edit_events/edit'); ?>
                                 <?php $title_data = array(
                                        'name' => 'title',
                                        'id'=> 'title',
										'value'=> $event->title,
                                        'maxlength'   => '100',
                                        'size' => '30' ); ?>
                            <?php echo form_input($title_data);?>
                            <br/><br/>
								<?php $copy_data = array(
                                        'name' => 'copy',
                                        'id'=> 'copy',
										'value'=> $event->copy,
										'rows'   => '5',
                                        'cols' => '110' ); ?>
                            <?php echo form_textarea($copy_data);?>
                                     
                               <?php echo form_hidden('id', $event->id);?> 
                                
                       
                         <p><?php echo form_submit('submit', 'Save');?></p>
           
            			<?php echo form_close() ;?>
            <?php endforeach; ?>
                    
                    <?php else : ?>
                    
    <p class="attention">No records were returned.</p>
                            
                    <?php endif; ?>
        
                       
</div><!--end of #adminwrapper-->
</body>
</html>

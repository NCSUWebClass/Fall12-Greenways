<?php require("includes/headerAdmin.php"); ?>
          
   						<h3 align="center">    PHOTO GALLERY Admin Area: </h3>
                       
                       <p>The photos were uploaded via the contact form. You must approve the photo by clicking on the APPROVE link in order for it to appear on the PHOTO GALLERY page. To DELETE photo from database, and from the Photo Gallery, CLICK on the DELETE Link. To make a change to the caption, click on EDIT.</p>
			<?php if (isset($entries)):	foreach($entries as $entry): ?>
    				<table border="1" width="860" cellspacing="0" cellpadding="2">
       		  
			        <tr >
                           <td width="200px">
                                    <img class="photo" border="0"  src="<?php echo base_url();?>/uploads/thumbs/<?php echo $entry->image; ?>"/>
                                       </td>
                           <td width="500"><?php echo $entry->caption; ?></td>
<!--    If there is a caption, it can be edited   -->                    
                         <?php if($entry->caption ==TRUE): ?>
                         	<td width="100">
							<?php echo anchor("edit_gallery/index/$entry->id", 'Edit Caption'); ?></td>
                         <?php else: ?>
                        	<td width="100">No caption
                            </td>
                        <?php endif; ?> 
                         
                           <td width="60"><?php echo anchor("admin_gallery/delete/$entry->id", 'Delete'); ?></td>
                         <?php if($entry->approved ==0): ?>
                            <td width="60"><?php echo anchor("admin_gallery/update/$entry->id", 'Approve'); ?></td>
						<?php else: ?>
                        	<td width="60">Approved</td>
                        <?php endif; ?>
                        
                        
                         
                   <tr/>
                  

             </table>      
                    <?php endforeach; ?>
                    
                    <?php else : ?>
                    
    <p class="attention">No records were returned.</p>
                            
                    <?php endif; ?>
			
                
	<?php echo form_close() ;?>


</div><!--end of #adminwrapper-->
</body>
</html>

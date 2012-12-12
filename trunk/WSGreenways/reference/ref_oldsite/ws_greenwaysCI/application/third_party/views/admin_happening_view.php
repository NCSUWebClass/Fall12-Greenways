<?php require("includes/headerAdmin.php"); ?>
           <h3 align="center">    WHAT'S HAPPENING Admin Area: </h3>
           	<p class="attention">To add links, make copy bold, to break a line, you must add some HTML.</p> 
                <h2 class="trigger">Click here for HTML instructions</h2>
                <div class="toggle_box">
                	
                        <p>For a <b>LINE BREAK</b> in the text, add this code:<strong> &lt;br /&gt;</strong>. For a extra line between paragraphs, add it twice: <strong>&lt;br /&gt;&lt;br /&gt;</strong></p>
                         <p> To create a <strong>PARAGRAPH</strong>, with the first sentence indented and space between paragraphs (without adding above code), add this copy BEFORE: <b>&lt;p&gt;</b> and this code AFTER:<b> &lt;/p&gt;</b> the text.</p>
                        <p>To make text <b>BOLD</b>, add this code before the word: <strong>&lt;b&gt;</strong>
                        and this code AFTER the word:<strong>&lt;/b&gt;</strong></p>
                         <p>To <strong>make a word a LINK</strong>: add <strong>&lt;a href='url'&gt;</strong>  before the link and <strong>&lt;/a&gt;</strong> after. Add entire url (including http://www) between APOSTROPHE marks in href='url'. &nbsp;&nbsp;Example: &lt;a href='http://www.domainname.com'&gt;Name of link&lt;/a&gt;</strong><strong><br/>
                         ATTENTION: use apostrophe marks</strong> (not quotation marks) for href='url'.</p>
                        <p>To <strong>add EMAIL LINK</strong>, use the same as link, but add <strong>mailto:</strong> before url. Example:<br/>
                        <strong> &lt;a href='mailto:info@wsgreenways.com'&gt;email us&lt;/a&gt;</strong>.  </p>
  				</div><!--#toggle_box-->
                
                 <h2 class="trigger2">Click here for instructions on UPLOADING PHOTOS</h2>
                <div class="toggle_box2">
                <p> <span class="attention">ATTENTION when uploading images:</span> Photos from a camera are always very large. They need to be reduced to be uploaded. <br/>
                               The  photo to be uploaded should have a <strong>Maximum Width: 800px and Maximum Height: 600px</strong> (or it won't upload). The photo should not be too small either, or it won't look sharp. Online it appears with a width of 410px.<br/>
                 Use <strong>Microsoft Office Picture Manager,</strong> choose Picture/Resize/predefined width x height: Large Web (on the right).<br/>
                 The most recently-added photo appears on top, in descending order.</p>
                 </div><!--#toggle_box2-->
                
  <?php echo form_open_multipart('admin_happening/create'); ?>
           		<?php echo validation_errors('<p class="error">'); ?>
             <div class="galleryForm"> 
                         <p><label for="image">Add <strong>IMAGE</strong> to the "What's Happening" page:</label>
                            <?php echo form_upload('userfile'); ?></p>
                         <p><label for="caption">Add <strong>TITLE</strong> for this copy:</label>
                                    <?php $title_data = array(
                                        'name' => 'title',
                                        'id'=> 'title',
                                        'maxlength'   => '100',
                                        'size' => '60' ); ?>
                            <?php echo form_input($title_data);?></p>
                            
                            <p><label for="caption">Add <strong>COPY</strong> to the What's Happening page:</label>
                                    <?php $copy_data = array(
                                        'name' => 'copy',
                                        'id'=> 'copy',
										'rows'   => '10',
                                        'cols' => '110' ); ?>
                            <?php echo form_textarea($copy_data);?></p>
                            
                      
                       
                         <p><?php echo form_submit('upload', 'Save/Upload');?></p>
            </div>
            <?php echo form_close() ;?>
            
        <h3 class="colorBar">This is what is currently showing on the What's Happening page:</h3>
                <p style="clear:both; font-weight:bold"><a name="table">To DELETE from database, and from the homepage, click DELETE link on the right. To make a change to copy, click EDIT.</a></p>
                 	<?php if(isset($images)) : foreach($images as $image) : ?>
                    <table width="960px" border="2" cellspacing="0" cellpadding="5">
                             <!-- <tr>
                                     <th>Title</th>
                                     <th>Copy</th>
                                     <th>Image</th>
                                     <th>Delete</th>
                              </tr>-->
                              <tr>
                                        <td scope="col" width="140px" valign="top"> 
                                            <?php echo $image->title;?>
                                        </td>
                                        <td scope="col" width="480px" valign="top">
                                            <?php echo $image->copy;?>
                                        </td>
                                        <td width="300px">
                                                    <img class="photo" border="0"  src="<?php echo base_url();?>/uploadsHap/thumbs/<?php echo $image->image; ?>"/>
                                       </td>
                                       <td width="60px">
                                                <?php echo anchor("edit_happening/index/$image->id", 'Edit'); ?>
                                        </td>
                                        <td width="60px">
                                                <?php echo anchor("admin_happening/delete/$image->id", 'Delete'); ?>
                                        </td>
                              </tr>
                    </table>
								<?php endforeach; ?>
                                <?php else : ?>
                						<p class="attention">No records were returned.</p>
                                <?php endif; ?>
                       
</div><!--end of #adminwrapper-->
</body>
</html>

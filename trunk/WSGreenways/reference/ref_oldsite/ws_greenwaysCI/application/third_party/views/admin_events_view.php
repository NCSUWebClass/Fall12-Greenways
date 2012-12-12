<?php require("includes/headerAdmin.php"); ?>

        <h3 align="center">    EVENTS Page Admin Area: </h3>  
    	<?php /*?><?php echo anchor('admin_homeimg', 'Add PHOTO to Homepage', 'class="homeLink"' ); ?><?php */?>
<?php echo form_open('admin_events/create'); ?>
           		<?php echo validation_errors('<p class="error">'); ?>
                <p class="attention">To add links, make copy bold, to break a line, you must add some HTML. </p>
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
  				</div><!--#instructions-->
            
      
             <div class="galleryForm"> 
                           
                            <p><label for="caption">Add <strong>DATE</strong> of the event:</label>
                                    <?php $title_data = array(
                                        'name' => 'title',
                                        'id'=> 'title',
                                        'maxlength'   => '100',
                                        'size' => '30' ); ?>
                            <?php echo form_input($title_data);?></p>
                            
                            <p><label for="caption">Add <strong>COPY</strong> for this event:</label>
                                    <?php $copy_data = array(
                                        'name' => 'copy',
                                        'id'=> 'copy',
										'rows'   => '5',
                                        'cols' => '110' ); ?>
                            <?php echo form_textarea($copy_data);?></p>
                       
                         <p><?php echo form_submit('submit', 'Save');?></p>
            </div>
            <?php echo form_close() ;?>
            
        <h3 class="colorBar">This is the copy currently showing on the HOMEPAGE:</h3>
                <p style="clear:both; font-weight:bold"><a name="table">To DELETE from database, and from the Events page, click DELETE link on the right. To make a change to copy, click EDIT.</a></p>
                 	<?php if(isset($events)) : foreach($events as $event) : ?>
                    <table width="900px" border="2" cellspacing="0" cellpadding="5">
                                                            <tr>
                                       
                                       <td scope="col" width="250px" valign="top">
                                            <?php echo $event->title;?>
                                        </td>
                                        <td scope="col" width="600px" valign="top">
                                            <?php echo $event->copy;?>
                                        </td>
                                       <td width="50px">
                                                <?php echo anchor("edit_events/index/$event->id", 'Edit'); ?>
                                        </td>
                                        <td width="50px">
                                                <?php echo anchor("admin_events/delete/$event->id", 'Delete'); ?>
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

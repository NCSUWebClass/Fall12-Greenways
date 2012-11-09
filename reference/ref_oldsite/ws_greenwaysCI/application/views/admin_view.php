<?php require("includes/headerAdmin.php"); ?>
          
   		<h3 align="center">You are in the Administrative Area of the WSGreenways website.</h3> <br/>
   	

		<ul id="adminLinks_2">
          			<li><?php echo anchor('admin_homepage', 'Homepage - Add Copy' ); ?></li>
                    <?php /*?><!--<li><?php echo anchor('admin_homeimg', 'Homepage - Add Images' ); ?></li>--><?php */?>
                    <li><?php echo anchor('admin_gallery', 'Photo Gallery' ); ?></li>
                    <li><?php echo anchor('admin_happening', 'News Page' ); ?></li>
                    <li><?php echo anchor('admin_events', 'Events Page' ); ?></li>
                    
          </ul>
           

</div><!--end of #adminwrapper-->
</body>
</html>

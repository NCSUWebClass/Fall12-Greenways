<script type='text/javascript'>
		$(document).ready(function(){
			$('#multi-ddm').dropDownMenu({timer: 1000, parentMO: 'parent-hover', childMO: 'child-hover1'});
		});
</script>

<div id="mast">
<div id="mastContent">
            		<h1 style="background-color:transparent"><a href="<?php echo site_url();?>/site"><span style="display:none">WSGreenways.com</span></a></h1>
                     <div id="paypalSeal"> 
                   		<a href="https://www.paypal.com/us/verified/pal=wsgreenways%40gmail%2ecom" target="_blank" >
                        <img  src="<?php echo base_url();?>images/icons/verification_seal.gif" alt="Official PayPal Seal" width="45" height="45" border="0" />
                        </a>
                   </div><!--#paypalSeal-->
                    <div id="donateButton">
                    	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="background-color:transparent;">
                            <input type="hidden" name="cmd" value="_s-xclick"/>
                            <input type="hidden" name="hosted_button_id" value="FLWE484EPC6GY"/>
                                <input  style="background-color:transparent" type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"  name="submit" alt="PayPal - The safer, easier way to pay online!"/></form>          
                	</div><!--#donateButton-->
                    <ul id="topNav">
                    	
                        <li class="space"> | </li>
                       <li><a href="<?php echo site_url();?>/access"><img src="<?php echo base_url();?>images/icons/disabled.gif"  width="32" height="32" alt="icon" /></a></li>
                        <li class="space"> | </li>
                      	<li><?php echo anchor('about#joinus', 'Join Us');?></li>
                        <li class="space"> | </li>
                        <li><?php echo anchor('contact', 'Contact');?>
                        <li class="space"> | </li>
                         <li><?php echo anchor('about', 'About Us');?></li>
                         <li class="space"> | </li>
                         <li><?php echo anchor('site', 'Home');?></li>
                    </ul>
                    
            </div><!--#mastcontent-->
      <div id="mastShadow"></div>      
</div><!--#mast-->

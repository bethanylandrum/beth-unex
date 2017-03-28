<!--
/*
* Plugin Name: SalesCart Ecommerce
* Description: Add an Ecommerce Store to Wordpress 1-2-3
* Version: 1.0
* Author: SalesCart
* Author URI: http://www.SalesCart.com
* Copyright (C) 2015 by ComCity LLC and SalesCart.
* Distribution License: GNU General Public License v2
* All Other Rights Reserved
*/
-->

<!-- START Admin view for plugin-->

<form action="options.php" method="post">
<?php

wp_nonce_field('sc_update_options');
settings_fields('salescart_options'); 

$storeid = get_option('scart_store_id');

?>

<div class="wrapper scart_mainContainer">
	
<!-- Top content area of plugin -->
    <div class="main_contant">
	<h1>Welcome to the SalesCart Shopping Cart Plugin!</h1>
	<p>This shopping cart plugin will fulfill all your E-commerce needs!</p>

	<p>Get started by clicking on the Start Now button to build your Store.&nbsp; 
	You will use Facebook to secure a Facebook page.&nbsp; 
	After completing steps 1-6 to register and create your store, enter the store ID. Then, go to the <a href="<?php echo admin_url('/edit.php?post_type=page');?>">Page area</a> 
	add a blank empty page, and copy and paste the short code below into the page to display that store.  <span class="special_text">Choose a page in your theme that has at least 600 pixels and no sidebar so there is room to display the store.</span>  To disable the sidebar widgets on one page to make room, we recommend the WordPress <a href="https://wordpress.org/plugins/display-widgets/" target="_blank">display-widgets plug-in</a>.  Watch a video <a href="http://www.wpbeginner.com/plugins/how-to-show-or-hide-widgets-on-specific-wordpress-pages/" target="_blank">here</a> on how to do this.  
Finally, click on the Start Now button again to finish steps 7-9 and customize your products using the <a href="http://admin.salescart.net" target="_blank">SalesCart Admin Control Panel.</a> </p>
		<p>Free support.  If you have any questions, <a  href="http://forum.salescart.com" title="SalesCart Help" alt="SalesCart Help" target="_blank" class="lit_txt">let us know</a>, we‘ll help you out!</p>
    </div>
<!-- END Top content area of plugin -->
<div class="sc_logo"><img src="<?php echo SC_PLUGURL;?>images/Main-Sm-SalesCart-Logo.png" alt="SalesCart Logo" /></div>

<!-- Build table area of plugin -->
		<table class="build-table">
			<tr>
				<th>
				<h2>BUILD STORE</H2></th>
				<th>
				<h2>STORE ID</h2></th>
				<th>
				<h2>SHORT CODE</h2></th>
			</tr>
			<tr>
				<td>
				<p>Just complete Steps 1-6.  Do other steps later. </p>
				</td>
				<td>
				<p>Enter Store ID to display:</p>
				</td>
				<td>
				<p>Enter short code into WordPress Page<br/> where you want the 
				store to display.</p>                            
				</td>
			</tr>
<tr>
<td colspan=3>&nbsp;</td>
</tr>
			<tr>
				<td>
				<a href="http://www.salescart.com/FaceBook/Getting-Started/default.html#FreeStore" target="_blank" class="salescart-button">
				</a></td>
				<td>
				<input name="scart_store_id"  id="scstore_id" class="add"  type="number" value="<?php echo (get_option('scart_store_id')!=0) ?  get_option('scart_store_id') : '' ;?>" placeholder="E.g 19" class="add" />
				</td>
				<td>
				<h3>[my-salescart-store]</h3></td>
			</tr>
		</table>
<!-- END Build table area of plugin -->
      
    <!-- step 1 end  here -->

    <div class="tab8">
<br/>
         <div>
			 <input type="submit" class="scart_save_button" id="save_scart_store" value="Save Settings" />
	 </div>
         <p class="red_txt errorMsg" style="display:none"> </p>
         <p class="blue_txt sucMsg" style="display:none"> </p>
    </div>
         <p><br/></p>
		<table class="sell-table">
			<tr>
				<th>
				EASY / FAST / SECURE</th>
				<th>
				MORE COMPLETE</th>
				<th>
				MORE ECONOMICAL</th>
			</tr>
			<tr>
				<td>
				<ul class="sc_bullet_square">
					<li>&nbsp;&lt;15 mins. to register/create Store</li>
					<li>~ 3 mins. to add a product</li>
					<li>1st Cart out-of-scope for PCI PA-DSS</li>
				</ul>
				</td>
				<td>
				<ul class="sc_bullet_square">
					<li>Free 
				Facebook Store,</li>
					<li>Free WordPress Store,</li>
					<li>Free stand alone Mobile 
				Store,</li>
					<li>& push products instantly to Pinterest Store</li>
				</ul>
				</td>
				<td>
				<ul class="sc_bullet_square">
					<li>Free-<10 products</li>
					<li>$15/month-<100 products</li>
					<li>$35/month-<1000 products.  All-in-One. No additional monthly fee for credit cards</li>
					<li>add mobile card swiper for retail sales</li>
				</ul>
				</td>
			</tr>
		</table>
	 <p class="plug_footer">This plugin is free. We would appreciate it if 
	 you could please do us a BIG favor and give us a 5 star rating <a href="https://wordpress.org/support/view/plugin-reviews/<?php echo (SC_Slug)?>" target="_new">here</a>. If you're not happy, please 
	 <a href="mailto:support@comcity.com?subject=SalesCart WordPress Plugin">get in touch with us</a>, so that we can sort it out. Thank you!</p>

</form>          
<!-- Admin view for Salescart plugin-->




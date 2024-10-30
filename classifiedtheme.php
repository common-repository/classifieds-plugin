<?php
/**
 * @package ClassifiedsTheme
 * @author Mark Fail
 * @version 1.6
 */
/*
Plugin Name: Wordpress Classifieds
Plugin URI: http://ClassifiedsTheme.com/
Description: urn a standard Wordpress blog into a powerful, feature rich classifieds website easily with lots of great featured!
Author: PremiumPress
Version: 1.6
Author URI: http://www.premiumpress.com
*/

function ClassifiedsTheme_plugin_options() {

	add_menu_page(__('ClassifiedsTheme_plugin'), __('Classifieds','cp'), 8, basename(__FILE__), '', 'http://www.ClassifiedsTheme.com/favicon.ico');
 
	add_submenu_page(basename(__FILE__), __('ClassifiedsTheme_plugin','cp'), __('Getting Started','cp'), '10', basename(__FILE__), 'ClassifiedsTheme_plugin');	
	add_submenu_page(basename(__FILE__), __('ClassifiedsTheme_plugin','cp'), __('More Themes','cp'), '10', 'plugin_themes', 'ClassifiedsTheme_plugin_themes');	

}

function ClassifiedsTheme_plugin_logo(){

?>
<a href="http://www.premiumpress.com/?adminlink=ClassifiedsTheme" target="_blank">
<img src="http://www.premiumpress.com/inc/images/layout/logoSymbol-small.png" style="float:right; margin-top:10px;" />
</a>

<?php

}



function ClassifiedsTheme_plugin( ) { ?>

<div class="wrap"><?php echo ClassifiedsTheme_plugin_logo(); ?> 
<h2>Getting Started with Wordpress Classifieds</h2>
<hr>
<p><b>NOTE: ClassifiedsTheme plugin has now been redeveloped as a Wordpress theme.</b> </p>
<p>To use ClassifiedsTheme please download the free Wordpress theme (below) and install it under the themes section of your Wordpress admin. </p>
<iframe src="http://premiumpress.com/downloads/?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }


function ClassifiedsTheme_plugin_themes( ) { ?>
<div class="wrap"><?php echo ClassifiedsTheme_plugin_logo(); ?> 
<h2>ClassifiedsTheme Developed by PremiumPress</h2><hr>
<p>Take a look at some of our other premium wordpress themes at <a href="http://www.premiumpress.com" target="_blank">www.premiumpress.com</a></p>
<iframe src="http://premiumpress.com?source=wordpress-plugin" width="100%" style="height:900px;"></iframe>
</div>
 
<?php }

add_action('admin_menu', 'ClassifiedsTheme_plugin_options');
?>

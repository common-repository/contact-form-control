<?php 
$advcontent = '
<div class="alborotado-advertiser clearfix">
	<h2 class="alborotado-title">Pro Team</h2>
	<a target="_blank" href="https://wordpress.org/plugins/pro-team/">
		<img class="alborotado-image" src="//ps.w.org/pro-team/assets/banner-772x250.jpg">
	</a>
	<p class="alborotado-description">
	ProTeam is a free but powerful plugin. In fact, I can proudly say that is the most complete team manager that you will find at WordPress.org It is pretty new but try it and compare. You can adjust almost everything to your info and design requirements.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://proteam.alborotado.com/">Plugin Demo</a>
		<a target="_blank" class="alborotado-button" href="https://wordpress.org/plugins/pro-team/">Plugin Details</a>
	</div>	
	
	
	<h2 class="alborotado-title">WooEnhancer</h2>
	<a target="_blank" href="https://wordpress.org/plugins/wooenhancer/">
		<img class="alborotado-image" src="https://ps.w.org/wooenhancer/assets/banner-772x250.jpg?rev=1491475">
	</a>
	<p class="alborotado-description">
	Extends WooCommerce and customize design. Remove, reorder or rearrange fields. Deactivate WooCommerce functions,add new ones, replace texts and more...
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/plugindemo/woocommerce_enhancer/shop/">Plugin Demo</a>
		<a target="_blank" class="alborotado-button" href="https://wordpress.org/plugins/wooenhancer/">Plugin Details</a>
	</div>
	
	
	
	<h2 class="alborotado-title">WooEnhancer Pro</h2>
	<a target="_blank" href="http://alborotado.com/producto/wooenhancer-pro/">
		<img class="alborotado-image" src="'.plugins_url( 'images/wooenhancer-pro.jpg', __FILE__ ).'">
	</a>
	<p class="alborotado-description">
	WooEnhancer Pro activates all the required functions listed as PRO under WooEnhancer Plugin.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/plugindemo/woocommerce_enhancer/shop/">Plugin Demo</a>
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/producto/wooenhancer-pro/">Plugin Details</a>
	</div>

	

	
	<h2 class="alborotado-title">Sportif Theme</h2>
	<a target="_blank" href="http://alborotado.com/themes/sportif">
		<img class="alborotado-image" src="'.plugins_url( 'images/responsive-sportif2.jpg', __FILE__ ).'">
	</a>
	<p class="alborotado-description">
	Sportif is a Wordpress Theme suitable for gym/sports sites. It has a unique vanguardist design.
	
	All templates are easily customizable, because almost everything on this theme was made with Divi, the fantastic page builder made by elegantthemes. 
	
	Want to know best? You can choose the price! Yeah, pay your price for this fantastic theme.
	<p>
	<div class="alborotado-buttons-container">
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/themes/sportif">Theme Demo</a>
		<a target="_blank" class="alborotado-button" href="http://alborotado.com/producto/sportif-tema-wordpress-orientado-a-deportes/">Theme Details</a>
	</div>



</div>
';


 Redux::setSection( $opt_name, array(
        'title'            => __( 'Themes & Plugins', 'redux-framework-demo' ),
        'desc'             => __( '', 'redux-framework-demo' ),
        'id'               => 'alborotado-options-fields',
        'subsection'       => false,
        'customizer_width' => '700px',
        'fields'           => array(
            array( 
				'id'       => 'advertise-alborotado',
				'type'     => 'raw',
				'title'    => __('Other themes & plugins made by Miguras', 'redux-framework-demo'),
				'subtitle' => __('', 'redux-framework-demo'),
				'desc'     => __('', 'redux-framework-demo'),
				'content'  => $advcontent,
			),
        )
    ) );
?>
<?php 

/**
 * HEADER
/**

/**
 * Agregando Carrito de Compras en el Header
*/

function header_cart() {
	if ( is_woocommerce_activated() ) {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
	?>
	<ul class="site-header-cart menu">
		<li class="<?php echo esc_attr( $class ); ?>">
			<?php storefront_cart_link(); ?>
		</li>
		<li>
			<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
		</li>
	</ul>
	<?php
	}
}

/**
 * Agregar Logo en el Header
*/

function storefront_site_branding() {
	?>
		<div class='logo_header'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="http://i0.wp.com/tachiraproduceyexporta.com/wp-content/uploads/2016/09/logo-header.png" alt="Logo Header">
			</a>
		</div>
	<?php 
}

/**
 * Agregar Banner en el Header
*/

function banner_header() {
	?>
		<picture>
			<img src="http://i0.wp.com/tachiraproduceyexporta.com/wp-content/uploads/2016/09/banner-header.jpg" alt="Banner Header">
		</picture>
	<?php 
}

/**
 * Header secondary navigation wrapper
 */
function storefront_secondary_navigation_wrapper() {
	echo '<section class="secondary_navigation_wrapper">';
}

/**
 * The secondary navigation wrapper close
 */
function storefront_secondary_navigation_wrapper_close() {
	echo '</section>';
}
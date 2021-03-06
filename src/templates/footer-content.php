
<div class="site-footer__item">
	<h2>
	Nosotros
	</h2>
	<picture>
		<img src="http://i0.wp.com/tachiraproduceyexporta.com/wp-content/uploads/2016/09/logo-footer.png" alt="Logo Footer"/>
	</picture>
</div>
<div class="site-footer__item">
	<h2>Categorías</h2>
	<?php wp_nav_menu(
			array(
			'theme_location' => 'primary',
			'container' => 'nav',
			// 'link_before'	=> '<i class="fa fa-angle-right"></i> ',
			'container_class' => 'site-footer__item--nav',
			'menu_class' => 'site-footer__item--nav-categories',
			'depth' => 1
			)
		);
	?>
</div>
<div class="site-footer__item">
	<h2>
	Mensaje Directo
	</h2>
	<?php get_template_part( 'templates/footer', 'formcraft'); ?>
</div>
<div class="site-footer__item">
	<h2>
	Contáctenos
	</h2>
	<div class="site-footer__item--contact">
		<i class="fa fa-phone"></i>
		<span><?php get_template_part( 'templates/add', 'phone'); ?></span>
	</div>
	<div class="site-footer__item--contact">
		<i class="fa fa-whatsapp" aria-hidden="true"></i>
		<span><?php get_template_part( 'templates/add', 'whatsapp'); ?></span>
	</div>
	<div class="site-footer__item--contact">
		<!-- <i class="fa fa-envelope"></i> -->
		<span class="email"><?php bloginfo('admin_email'); ?></span>
	</div>
</div>
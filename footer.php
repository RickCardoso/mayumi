<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mayumi
 */

?>

	</div><!-- #content -->

	<!-- svg sprites -->
	<svg style="width:0; height:0; position: absolute; top: -9999px;">
		<symbol id="twitter" viewBox="0 0 18.5 15.219">
			<path d="M18.507,1.790 C17.826,2.096 17.094,2.302 16.326,2.395 C17.110,1.920 17.712,1.167 17.996,0.269 C17.262,0.710 16.450,1.029 15.584,1.202 C14.892,0.455 13.905,-0.012 12.813,-0.012 C10.716,-0.012 9.016,1.709 9.016,3.831 C9.016,4.132 9.049,4.426 9.114,4.707 C5.958,4.547 3.160,3.017 1.288,0.692 C0.961,1.259 0.774,1.919 0.774,2.624 C0.774,3.957 1.444,5.133 2.463,5.822 C1.840,5.802 1.255,5.630 0.743,5.342 C0.743,5.358 0.743,5.374 0.743,5.390 C0.743,7.252 2.052,8.805 3.789,9.159 C3.470,9.246 3.135,9.293 2.788,9.293 C2.543,9.293 2.306,9.269 2.074,9.224 C2.557,10.751 3.959,11.862 5.621,11.893 C4.321,12.924 2.684,13.538 0.905,13.538 C0.598,13.538 0.296,13.520 -0.001,13.485 C1.680,14.575 3.676,15.211 5.820,15.211 C12.804,15.211 16.623,9.355 16.623,4.277 C16.623,4.111 16.620,3.944 16.612,3.780 C17.354,3.238 17.998,2.561 18.507,1.790 Z"/>
		</symbol>
		<symbol id="instagram" viewBox="0 0 18.78 19">
			<path d="M17.231,17.496 C16.235,18.480 14.857,19.001 13.245,19.001 L5.533,19.001 C3.951,19.001 2.584,18.479 1.580,17.493 C0.546,16.477 -0.001,15.062 -0.001,13.400 L-0.001,5.551 C-0.001,2.227 2.206,-0.006 5.490,-0.006 L13.288,-0.006 C14.891,-0.006 16.266,0.532 17.264,1.550 C18.255,2.560 18.778,3.944 18.778,5.551 L18.778,13.444 C18.778,15.094 18.243,16.496 17.231,17.496 ZM17.050,5.551 C17.050,4.415 16.700,3.458 16.037,2.782 C15.371,2.103 14.420,1.744 13.288,1.744 L5.490,1.744 C4.350,1.744 3.400,2.095 2.740,2.758 C2.078,3.425 1.728,4.391 1.728,5.551 L1.728,13.400 C1.728,14.578 2.093,15.559 2.784,16.237 C3.459,16.901 4.410,17.251 5.533,17.251 L13.245,17.251 C14.396,17.251 15.357,16.903 16.023,16.245 C16.695,15.581 17.050,14.612 17.050,13.444 L17.050,5.551 ZM14.402,5.545 C13.796,5.545 13.305,5.048 13.305,4.435 C13.305,3.822 13.796,3.324 14.402,3.324 C15.008,3.324 15.499,3.822 15.499,4.435 C15.499,5.048 15.008,5.545 14.402,5.545 ZM9.389,14.333 C6.725,14.333 4.558,12.140 4.558,9.444 C4.558,6.747 6.725,4.554 9.389,4.554 C12.053,4.554 14.220,6.747 14.220,9.444 C14.220,12.140 12.053,14.333 9.389,14.333 ZM9.389,6.304 C7.678,6.304 6.286,7.712 6.286,9.444 C6.286,11.175 7.678,12.584 9.389,12.584 C11.100,12.584 12.492,11.175 12.492,9.444 C12.492,7.712 11.100,6.304 9.389,6.304 Z"/>
		</symbol>
		<symbol id="facebook" viewBox="0 0 8.44 18.375">
			<path d="M11.321,7.840 L7.465,7.840 L7.465,5.321 C7.465,4.375 8.094,4.154 8.537,4.154 C8.980,4.154 11.259,4.154 11.259,4.154 L11.259,-0.006 L7.510,-0.020 C3.349,-0.020 2.402,3.082 2.402,5.068 L2.402,7.840 L-0.004,7.840 L-0.004,12.126 L2.402,12.126 C2.402,17.627 2.402,24.255 2.402,24.255 L7.465,24.255 C7.465,24.255 7.465,17.562 7.465,12.126 L10.879,12.126 L11.321,7.840 Z"/>
		</symbol>
	</svg>
	<!---->

	<footer id="colophon" class="site-footer">
		<nav class="navbar navbar-expand footer-navigation">
			<div class="company-hq">
				<span>
					5630 Sawtelle Blvd, Culver City, CA 90230
				</span>
			</div><!-- .company-hq -->

			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'menu-2',
					'menu_id'        	=> 'footer-menu',
					'menu_class'		 	=> 'navbar-nav',
					'container_id'		=> 'footer-nav',
					'container_class'	=> 'collapse navbar-collapse'
				) );
			?>

			<div class="social-menu">

			<?php

			$menu_name = 'menu-3';

	    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
	    	$menu_items = wp_get_nav_menu_items($menu->term_id);

	    	foreach ( (array) $menu_items as $key => $menu_item ) : ?>

					<a class="social-link" href="<?php echo $menu_item->url; ?>"><i class="fab fa-<?php echo $menu_item->title; if ( $menu_item->title == 'facebook' ) : echo '-f'; endif; ?>"></i></a>

		    <?php endforeach;

	    endif; ?>

			</div><!-- .social-menu -->
		</nav><!-- .footer-navigation -->

		<div class="site-info">
			<span>&copy; 2017 - Mayumi</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

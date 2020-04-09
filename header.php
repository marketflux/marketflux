<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ) ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<header>
				<section class=" container-fluid top-bar">

					<div class="row row-first flex-wrap justify-content-between align-items-center">
						<!--logo-->
						<div class="logo col-2 d-flex  justify-content-center">
							<a href="<?php echo esc_url(home_url( '/' ) ); ?>"><span class="icon icon--logo-sm logo-icon d-inline-block"></span></a>
						</div>
								<!--search-->
						<div class="search col-md-6 col-6 d-none d-md-block">
							<div class="text-center align-items-center">
								<?php get_search_form(); ?>
							</div>
						</div> <!--search-->

						<!--account-->
						<div class=" col-8 col-md-3 account mr-4">
							<div class="row justify-content-end">
								<?php if( class_exists( 'woocommerce' ) ): ?>
									<div class="signin bg-secondary">
										<ul class="navbar-nav flex-row flex-md-column">
											<?php if( is_user_logged_in() ): ?>
												<li>
													<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id'))) ?>">My Account</a>
												</li>
												<li>
													<a href="<?php echo esc_url( wp_logout_url( get_permalink( get_option('woocommerce_myaccount_page_id')) ) ) ?>">Logout</a>
												</li>
											<?php else: ?>
											<li>
												<a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id'))) ?>">Login/Regster</a>
											</li>
										<?php endif; ?>
										</ul>
									</div>
									<div class="cart bg-dark">
										<a href="<?php echo esc_url(wc_get_cart_url() ); ?>"><span class="icon icon--cart cart-icon"></span></a>
										<span class="items"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div> <!--row-first-->
					<!--row-second---->
					<div class="row row-second">
						<div data-toggle-target=".menu-categories" class="col-2 toggle-btn">
							<div class="categories bg-secondary d-none d-md-block text-uppercase font-weight-bold text-center">
								<span>categories</span>
							</div>
							<div class="mobile-nav-toggle d-md-none">
								<span></span>
							</div>

						</div>
						<div class="search col-10 d-md-none">
							<div class="text-center align-items-center">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>

				</section>
				<section>
						<div class="menu-categories position-absolute bg-white">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'categories',
								'depth'				=> 2,
								'mwnu_class'		=> 'nav navbar-nav',
								'walker'				=> new Walker_Nav_Primary()
							));
						?>
						</div>
					</section>

			</header>
 </div>

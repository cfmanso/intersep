<?php include_once("language-navbar.php") ?>
<header class="header">

	<!-- <a href="#" class="header__icon" id="header__icon"></a> -->
	<!-- <a href="<?php echo get_home_url(); ?>" class="header__logo">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/nemo_horizotal.png" />
	</a> -->

	<nav class="menu">
		<ul class="menu-principal">
			<?php
				$menuParameters = array(
					'theme_location' => 'navbar-menu',
					'container'       => false,
					'echo'            => false,
					'items_wrap'      => '%3$s',
					'depth'           => 0,
				);
				
				// echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
				
				echo wp_nav_menu( $menuParameters );
			?>
		</ul>
	</nav>


	

</header>
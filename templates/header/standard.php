<header class="ux-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-expand-lg ">
			<?php
			$logo_img = get_option('site_logo');
			if(!$logo_img) {
				$logo_img = get_stylesheet_directory_uri().'/assets/img/logo.png';
			}
			?>
			<a class="logo navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo $logo_img; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				{{#menu}}main_menu{{/menu}}
			</div>
		</nav>
	</div>
</header>

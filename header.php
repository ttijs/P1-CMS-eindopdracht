<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/png" href="imgs/favicon.png" />

<!--Bootstrap CSS-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

<!-- Additionals -->
<script src="https://kit.fontawesome.com/e0b3909ecc.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

<!--Custom CSS-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>


<body>

	<header>
		<section class="container header">
			<div class="row no-gutters">
				<div class="col-12 header">
					<!-- BEGIN NAVBAR -->
					<!-- 
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-item nav-link" href="#">ABOUT</a>
								<a class="nav-item nav-link" href="#">HOW IT WORKS</a>
								<a class="nav-item nav-link" href="#">SERVICES</a>
								<a class="nav-item nav-link" href="#">FAQ</a>
								<a class="nav-item nav-link" href="#">CONTACT</a>
							</div>
							<?php 
							wp_nav_menu( 
								array(
									'theme_location' => 'hoofdmenu',
									'menu_class' => 'navbar-nav'
								)
							)
							?>

						</div>
					</nav>
					 -->
<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">FITNESS</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'mijn_custom_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>


					<!-- EINDE NAVBAR -->
					<img src="<?php bloginfo('template_url'); ?>/imgs/couple-exercising2.jpg" class='img-fluid img-fit' alt="Couple exercising">

					<div class="header-text">
						<h1><?php bloginfo('name'); ?></h1>
						<h3><?php bloginfo('description'); ?></h3>
					</div>
				</div>
			</div>
		</section>
	</header>

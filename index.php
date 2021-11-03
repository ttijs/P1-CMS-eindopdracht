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
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<!-- <div class="navbar-nav">
								<a class="nav-item nav-link" href="#">ABOUT</a>
								<a class="nav-item nav-link" href="#">HOW IT WORKS</a>
								<a class="nav-item nav-link" href="#">SERVICES</a>
								<a class="nav-item nav-link" href="#">FAQ</a>
								<a class="nav-item nav-link" href="#">CONTACT</a>
							</div> -->
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


	<main class="container defaultpage">

		<section class="row">
			<div class="offset-1 col-7">
				<?php
				if(have_posts()){
					while(have_posts()){
						the_post();

						the_title('<h1>','</h1>');

						the_content();
					}
				}
				?>

			</div>
			
			<aside class="col-4">
				
				<?php dynamic_sidebar( 'mijn-sidebar-widgets' ); ?>


				<div class="infosquare">
					<h5>It's all about</h5>
					<h3>Fitness first</h3>
					<i class="fas fa-tint icon"></i>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
						enim ad minim veniam, quis nostrud.
					</p>
					<a href="#">Read More</a>
				</div>
				<div class="">
					<img src="<?php bloginfo('template_url'); ?>/imgs/fitness.jpg" class='img-fluid img-fit' alt='Fitness girl'>
				</div>
				<div class="infosquare">
					<h5>Love your</h5>
					<h3>Own body</h3>
					<i class="fas fa-heart icon"></i>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
						eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
						enim ad minim veniam, quis nostrud.
					</p>
					<a href="#">Read More</a>
				</div>
				<div class="">
					<img src="<?php bloginfo('template_url'); ?>/imgs/watch.jpg" class='img-fluid img-fit' alt='Smartwatch'>
				</div>
			</aside>
			
		</section>
		
				
				
	</main>


	<footer>

	<?php dynamic_sidebar( 'mijn-footer-widgets' ); ?>



		<section class="container footer">
			<div class="row no-gutters">
				<img src="<?php bloginfo('template_url'); ?>/imgs/guy-watching-over-valley2.jpg" class='img-fluid img-fit' alt='Guy watching over valley'>
			</div>
			<div class="row no-gutters footer-content">
				<div class="offset-1 col-10 offset-lg-2 col-lg-2 offset-xl-2 col-xl-2">
					<h3>Resources</h3>
					<p>
						Easily manage your inspiration and work-in-progress by dragging
						images into projects and sharable client groups. work-in-progress
						by dragging images into projects and sharable client group
					</p>
				</div>
				<div class="offset-1 col-10 offset-lg-0 col-lg-4 offset-xl-0 col-xl-4">
					<h3>About us</h3>
					<p>
						Easily manage your inspiration and work-in-progress by dragging
						images into projects and sharable client groups. work-in-progress
						by dragging images into projects and sharable client group
					</p>
				</div>
				<div class="offset-1 col-10 offset-lg-0 col-lg-2 offset-xl-0 col-xl-2">
					<h3>Stay in touch</h3>
					<div class="social-icons">
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/imgs/fb-icon.png" alt="Facebook icon" /></a>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/imgs/twitter-icon.png" alt="Twitter icon" /></a>
						<a href="#"><img src="<?php bloginfo('template_url'); ?>/imgs/youtube-icon.png" alt="YouTube icon" /></a>
						<a target="blank" href="https://www.linkedin.com/in/daniel-eijkel/"><img src="<?php bloginfo('template_url'); ?>/imgs/linkedin-icon.png" alt="LinkedIn icon" /></a>
					</div>
				</div>
			</div>
		</section>
	</footer>
	
	
	
</body>
</html>

<!--jQuery & Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--Custom JavaScript-->
<script src="js/main.js"></script>
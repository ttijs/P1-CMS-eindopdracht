<?php
get_header();
?>
	<main class="container defaultpage">

		<section class="row">
			<div class="offset-1 col-7">

				<?php
				if(have_posts()){
					while(have_posts()){
						the_post();


						if (is_front_page()) {
							the_post_thumbnail( 'homepage-thumb' ); 
							the_title('<h1>','</h1>');
						} else {
							the_title('<h1>','</h1>');
							the_post_thumbnail( 'thumbnail', ['class' => 'mijn-class', 'title' => get_the_title()] ); 
						}
						the_content();

						?>
						<a href="<?php the_permalink(); ?>">lees meer</a>
						<?php
						echo 'aaaaaaa';

						if (comments_open() || get_comments_number() ) { 
							comments_template();
						}
						echo 'bbbbbbbb';
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


<?php
get_footer();
?>


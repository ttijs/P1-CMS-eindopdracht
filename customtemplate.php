<?php 
/* 
Template Name: Mijn Custom template
*/ 
?>


<?php
get_header();
?>
	<main class="container defaultpage">

		<section class="row">
			<div class="offset-1 col-11">
				<?php
				if(have_posts()){
					while(have_posts()){
						the_post();

						the_title('<h1>','</h1>');

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
				
			
		</section>
		
				
				
	</main>


<?php
get_footer();
?>



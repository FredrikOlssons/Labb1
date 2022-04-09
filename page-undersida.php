<?php get_header(); ?>

<?php while (have_posts()) {
	the_post(); ?>
	<main>
		<section>
			<div class="container">
				<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</div>
					<aside id="secondary" class="col-xs-12 col-md-3">
						<ul class="side-menu">
								<?php
								$menuarray = ['theme_location' => 'sidomeny',]; 
								wp_nav_menu($menuarray) ?>							
						</ul>
					</aside>
				</div>
			</div>
		</section>
	</main>
<?php } ?>

<?php get_footer(); ?>
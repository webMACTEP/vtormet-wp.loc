<?php
/*
 * The template for displaying all pages
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="page">

			<div class="entry-header">
				<h1><?php $sp_obj->get_title(); ?></h1>
				<div class="title-lines"></div>
			</div>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

		</div>
	</div>
<?php endwhile;

get_sidebar();
get_footer();

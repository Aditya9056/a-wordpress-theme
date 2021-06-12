<?php
get_header();

while ( have_posts() ) {
	the_post();
	?>
	<h1>A Page</h1>
	<h2><?php the_title(); ?></h2>
	<hr />
	<?php
	the_content();
}

get_footer();

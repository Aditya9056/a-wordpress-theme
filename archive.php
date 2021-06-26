<?php 

get_header();

?>

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/assets/images/ocean.jpg' ); ?>"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title">
            <?php
                // if( is_category() ){
                //     single_cat_title();
                // } else if( is_author()  ){
                //     echo "Posts by "; the_author();
                // }
                the_archive_title();
            ?>
        </h1>

		<div class="page-banner__intro">
			<p>
                <?php 
                
                the_archive_description();
                
                if( is_author() ){
                    
                    $count = count_user_posts( get_current_user_id() );
                    
                    echo __(" I've written $count Posts.", "text-domain");
                    
                }
                ?>
            </p>
		</div>
	</div>
</div>
<div class="container container--narrow page-section">
	<?php 
	
	while( have_posts() ){
		the_post();?>

		<div class="post-item">
			<h2 class="headline headline--medium headline--post-title"> 
				<a href="<?php the_permalink(); ?>">	<?php the_title(); ?>	</a>
			</h2>
			<div class="metabox">
				<p> Posted By <?php the_author_posts_link(); echo " on "; the_time('j-F-Y'); echo " in "; echo get_the_category_list(', '); ?> </p>
			</div> 
			<div class="generic-content">
				<?php the_excerpt(); ?>
			</div>
			<p> <a href="<?php the_permalink() ?>" class="btn btn--blue"> Read More </a> </p>
		</div>
		<?php
	}

	echo paginate_links();

	?>
</div>

<?php get_footer(); ?>
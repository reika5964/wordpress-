<?php 
	/* Template Name: Homepage */ 
	$top_featured = new WP_query( array(
		'category_name' => 'featured',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'ASC'
	));
	$other_featured = new WP_query( array(
		'category_name' => 'featured',
		'posts_per_page' => 4,
		'offset' => 1
	));
?>

<?php get_header(); ?>
		    <?php get_template_part('views/slider'); ?>	
			<!-- feature -->
			<div class="container">
				<section class="feature-block">
					<h3>ENJOY SUMMER FLAVORS</h3>
					<div class="row">
						<!-- feature left -->
						<?php if ( $top_featured -> have_posts()) : ?>
							<?php while ( $top_featured -> have_posts()) : $top_featured->the_post(); ?>
								<div class="col-md-6">
									<a href="<?php the_permalink(); ?>" class="large-image" title="<?php the_title(); ?>">
										<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" />
									</a>
							    </div>
							<?php endwhile; ?>
						<?php endif; ?>
						
						<!-- feature right -->
						<div class="col-md-6">
							<?php if ( $other_featured -> have_posts()) : ?>
								<div class="row">
								<?php while ( $other_featured -> have_posts()) : $other_featured->the_post(); ?>
									<div class="col-6">
										<a href="<?php the_permalink(); ?>" class="small-image" title="<?php the_title(); ?>">
											<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'product') ?>" alt="<?php the_title(); ?>" />
										</a>
									</div>
								<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="feature-banner">
						<a href="#">
							<img src="<?php echo get_template_directory_uri()?>/img/footer-banner.jpg" alt="promotion banner"/>
						</a>
					</div>
				</section>
			</div>
<?php get_footer(); ?>

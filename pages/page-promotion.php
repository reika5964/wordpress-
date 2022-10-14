<?php
   /* Template Name: Promotion */ 
    $promotions = new WP_Query( array(
        'categoty_name' => 'Promotion',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
 ?>

<?php get_header(); ?>

<div class="promotion-wrapper">
    <div class="container">
        <!-- promotion banner -->
        <section class="main-promotion-banner">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>" alt="<?php the_title()?>">
        </section>
        <!-- content -->
        <section class="main-promotion-content">
            <article class="page-content">
                <?php if (have_posts()) : ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>    
                <!-- <h3>Summer Jelly Bag Set</h3>
                <p>User experience hypotheses series A financing supply chain pivot mass market leverage conversion prototype. Business-to-consumer startup niche market long tail iteration agile development direct mailing. Handshake A/B testing termsheet marketing pivot business model canvas. Twitter virality low hanging fruit MVP founders.</p>
                <ul>
                    <li>Marketing graphical user interface stock interaction design</li>
                    <li>Low hanging fruit A/B testing gen-z branding business plan burn rate termsheet business-to-business bootstrapping. </li>
                    <li>Advisor hackathon burn rate accelerator venture incubator.</li>
                </ul> -->
            </article>
        </section>
        <!-- share -->
        <section class="main-promotion-sharing-center">
            <p>Share to your friends</p>
            <ul class="sharing-list">
                <li><a href="javascript:void(0)" class="social-facebook" title="share to facebook"><img src="<?php echo get_template_directory_uri()?>/img/icon-facebook.png" alt="facebook" /></a></li>
                <li><a href="javascript:void(0)" class="social-twitter" title="share to facebook"><img src="<?php echo get_template_directory_uri()?>/img/icon-twitter.png" alt="twitter" /></a></li>
                <li><a href="javascript:void(0)" class="social-line" title="share to facebook"><img src="<?php echo get_template_directory_uri()?>/img/icon-line.png" alt="line"/></a></li>
            </ul>
        </section>
        <section class="main-promotion-related">
            <div class="row">
                <!-- banner1 -->
                <?php if ($promotions->have_posts()) : ?>
                    <?php while ($promotions->have_posts()): $promotions->the_post(); ?>
                        <div class="col-md-4">
                            <div class="related-item">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                </a>
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p><?php echo get_the_date(); ?></p>
                            </div>
                        </div> 
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
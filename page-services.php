<?php
/*
Template Name: Services
 */
?>

<?php get_header(); ?>

    <div class="hero" style=" background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">
        <div class="wrapped hero-content">
            <h1><?php echo get_post_meta($post->ID, 'hero_title', true); ?></h1>
            <h2><?php echo get_post_meta($post->ID, 'hero_sub', true); ?></h2>
        </div><!-- end hero content -->
    </div><!-- end hero -->
    <div class="clearfix"></div>
    <?php
        $servicesloop = new WP_Query( array( 'post_type' => 'service') );
    ?>
    <div class="wrapped">
        <h1 class="heading-borders">
            Our Services
        </h1>
    </div>
    <div class="clearfix"></div>
    <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>
        <section class="service" id="<?php global $post; $post_slug=$post->post_name; echo $post_slug; ?>">
            <div class="wrapped">
                <div class="row service-top-info margin-top">
                    <div class="six-col left service-thumb"> 
                        <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                        ?>
                    </div>
                    <div class="six-col left"> 
                        <h2><?php the_title(); ?> </h2>
                        <div class="service-content">
                            <?php the_content(); ?> 
                        </div>
                        <a class="more-service left" href="#">More...</a>
                        <div class="clearfix"></div>
                        <h3><?php echo get_post_meta($post->ID, 'title_text', true); ?></h3>
                        <ul>
                            <?php 
                                $product_terms = wp_get_object_terms($post->ID, 's_highlight');
                                if(!empty($product_terms)){
                                    if(!is_wp_error( $product_terms )){
                                        foreach($product_terms as $term){
                                            echo '<li>'.$term->name.'</li>'; 
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="service-breakdown">
                    <div class="four-col left">
                        <h4><?php echo get_post_meta($post->ID, 'sum_title_1', true); ?></h4>
                        <p><?php echo get_post_meta($post->ID, 'sum_1', true); ?></p>
                    </div>
                    <div class="four-col left">
                        <h4><?php echo get_post_meta($post->ID, 'sum_title_2', true); ?></h4>
                        <p><?php echo get_post_meta($post->ID, 'sum_2', true); ?></p>
                    </div>
                    <div class="four-col left">
                        <h4><?php echo get_post_meta($post->ID, 'sum_title_3', true); ?></h4>
                        <p><?php echo get_post_meta($post->ID, 'sum_3', true); ?></p>
                    </div>
                </div>
            </div>
            <a href="index.php?pagename=contact" class="text-right   overlay-link right overlay-link-right">
                <span class="arrow-link"><?php echo get_post_meta($post->ID, 'cta_text', true); ?></span>
            </a>
        </section>
    <?php endwhile; ?>


<?php get_footer(); ?>
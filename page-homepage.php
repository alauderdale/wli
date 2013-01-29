<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<!--     slider -->
    <div class="slider">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
            <?php
                $sliderloop = new WP_Query( array( 'post_type' => 'slider_content') );
            ?>
            <?php while ( $sliderloop->have_posts() ) : $sliderloop->the_post(); ?>
                <div class="rsContent">
                    <img class="rsImg" src="<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>" href="<?php
                        echo $imgsrc2[0];
                        ?>" alt="">
                    <div class="wrapped slider-caption  infoBlockLeftBlack rsABlock rsNoDrag" data-fade-effect="" data-move-offset="10" data-move-effect="left" data-speed="200">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                        <a class="button" href="<?php echo get_post_meta($post->ID, 'call_to_action_link', true); ?>">
                            <span class="button-copy left">
                                <?php echo get_post_meta($post->ID, 'call_to_action', true); ?>
                            </span>
                            <span class="more-arrow"></span>
                        </a>
                    </div>
                </div>
            <!-- end slider loop -->
            <?php endwhile; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="wrapped">
        <div class="row border-bottom">
            <?php
                $homeserviceloop = new WP_Query( array( 'post_type' => 'home_service') );
            ?>
            <?php while ( $homeserviceloop->have_posts() ) : $homeserviceloop->the_post(); ?>
            <div class="four-col left  teaser">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <?php the_content(); ?>
                <a class="arrow-link" href="index.php?pagename=services#<?php echo get_post_meta($post->ID, 'service_slug', true); ?>"><?php echo get_post_meta($post->ID, 'service_call_to_action_text', true); ?></a>   
            </div>        
            <!-- end home service loop -->
            <?php endwhile; ?>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <h2>
                Let Us Guide The Way
            </h2>
            <div class="home-descript-copy">
                <div class="gold">
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?> 
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <a class="arrow-link" href="index.php?pagename=about">
                Learn more about our company
            </a>  
            </div>
            <div class="office-image left">
                <img src="<?php bloginfo('template_url'); ?>/images/office.png"/>
            </div>
            <div class="clearfix"></div> 
        </div>
    </div>
<?php get_footer(); ?>
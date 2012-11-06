<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<!--     slider -->
    <div class="slider ">
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
            <div class="four-col left  teaser">
                <h2>Financial Planning 
                    &amp; Advice
                </h2>
                <p>
                    In lacinia elit nec nibh ullamcorper ullamcorper id ut nisi. In imperdiet, augue non consectetur porta
                </p>
                <a class="arrow-link" href="#">Learn More</a>   
            </div>
            <div class="four-col left teaser">
                <h2>Financial Planning 
                    &amp; Advice
                </h2>
                <p>
                    In lacinia elit nec nibh ullamcorper ullamcorper id ut nisi. In imperdiet, augue non consectetur porta
                </p>   
                <a class="arrow-link" href="#">Learn More</a>   
            </div>
            <div class="four-col left teaser">
                <h2>Financial Planning 
                    &amp; Advice
                </h2>
                <p>
                    In lacinia elit nec nibh ullamcorper ullamcorper id ut nisi. In imperdiet, augue non consectetur porta
                </p>  
                <a class="arrow-link" href="#">Learn More</a>    
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <h2>
                Let Us Guide The Way
            </h2>
            <div class="home-descript-copy">
                <div class="gold large">
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?> 
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <a class="arrow-link" href="#">
                Let&apos;s find a strategy tailored to your goals
            </a>   
        </div>
    </div>
<?php get_footer(); ?>
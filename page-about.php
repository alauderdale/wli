<?php

/*

Template Name: About

 */

?>



<?php get_header(); ?>



<div class="hero" style="background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">

        <div class="wrapped hero-content">

            <h1><?php echo get_post_meta($post->ID, 'hero_title', true); ?></h1>

            <h2><?php echo get_post_meta($post->ID, 'hero_sub', true); ?></h2>

        </div><!-- end hero content -->

    </div><!-- end hero -->

    <div class="clearfix"></div>

    <div class="accent-bar"></div>

    <div class="wrapped">

        <div class="about-description row">

            <div class="six-col left"> 

                <div class="about-image">

                    <?php 

                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

                          the_post_thumbnail();

                        } 

                    ?>

                </div>

            </div>

            <div class="six-col left"> 

                <!--start the loop-->

                <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?> 

                <!--end the loop-->

                <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </div>

    </div>

    <a href="index.php?pagename=contact" style="padding-right:25.9%;" class="text-right about-overlay   overlay-link right overlay-link-right">

        <span class="arrow-link">We're here to help, drop us a line </span>

    </a>

    <div class="wrapped">

        <div class="clearfix"></div>

        <div class="process">

            <h1 class="heading-borders">

                Our Process

            </h1>

            <div class="about-process">

                <div class="process-hero">

                    <img src="<?php bloginfo('template_url'); ?>/images/process_img.png"/>

                </div>

                <?php

                $processloop = new WP_Query( array( 'post_type' => 'process_step') );

                ?>

                <?php while ( $processloop->have_posts() ) : $processloop->the_post(); ?>

                    <div class="two-col process-step left">

                        <h3 class="uppercase"><?php the_title(); ?></h3>

                        <?php the_content(); ?>

                    </div>

                <!-- end process loop -->

                <?php endwhile; ?>

            </div> 

        </div>

    </div>

    <div class="clearfix"></div>

    <div class="wrapped" id="meet-us-place">  

        <h1 class="heading-borders">

                Meet Us

        </h1>

        <div class="meet-us row">

            <?php

                $peopleloop = new WP_Query( array( 'post_type' => 'people') );

            ?>

            <?php while ( $peopleloop->have_posts() ) : $peopleloop->the_post(); ?>

            <div class="three-col person left">

                <a href="<?php the_permalink(); ?>" class="fancybox fancybox.ajax">

                    <?php 

                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

                          the_post_thumbnail();

                        } 

                    ?>

                </a>

                <div class="clearfix"></div>

                <h3><?php the_title(); ?></h3>

                <div class="descript">

                    <p class="gold"><?php echo get_post_meta($post->ID, 'job_title', true); ?></p>

                    <p>

                        <?php echo excerpt(20); ?>

                    </p>

                </div>

                <a href="<?php the_permalink(); ?>" class="arrow-link fancybox fancybox.ajax">

                    See More

                </a>

            </div>

            <?php endwhile; ?>

        </div>

        <div class="clearfix"></div>

        <?php

                $partnerloop = new WP_Query( array( 'post_type' => 'partner') );

        ?>

        <?php if ( post_type_exists('partner') ) { 

            echo '<h1 class="heading-borders">

                    Forward Thinking Companies

                  </h1>';

            }

        ?>

        <div class="partners full-width margin-top left">

            <?php while ( $partnerloop->have_posts() ) : $partnerloop->the_post(); ?>

                <div class="partner left">

                    <a class="left" href="<?php echo get_post_meta($post->ID, 'partner_url', true); ?>" target="_blank">

                        <?php 

                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

                          the_post_thumbnail();

                        } 

                    ?>

                    </a>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

<?php get_footer(); ?>
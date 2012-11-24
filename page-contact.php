<?php
/*
Template Name: contact
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
    <div class="wrapped">
        <!--start the loop-->
            <div class="row border-bottom">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?> 
                <!--end the loop-->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="contact-form row margin-top">
                <?php echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?>
            </div>
            <div class="clearfix"></div>
            <h1 class="heading-borders">
                Other ways to reach us
            </h1>
            <div class="row margin-top">
                <div class="two-col left">
                    <h3 class="uppercase">Stop By</h3>
                    <p>
                        950 S Cherry St #505
                        Denver, CO 80246
                    </p>
                </div>
                <div class="two-col left">
                    <h3 class="uppercase">Call Us</h3>
                    <p>
                        P+ 1877.678.6543 <br/>
                        F+ 1877.678.6543 <br/>
                        <a href="mailto:info@wealthlagacyinstitute.com">info@wealthlagacyinstitute.com</a>
                    </p>
                </div>
            </div>
    </div>
    


<?php get_footer(); ?>
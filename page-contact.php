<?php
/*
Template Name: contact
 */
?>

<?php get_header(); ?>

<div class="hero contact-hero" style="background-image:url(<?php echo get_post_meta($post->ID, 'upload_image', true); ?>);">
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
                    <?php 
                        if ( dynamic_sidebar('address') ) : 
                    ?>
                    <?php endif; ?>
                </div>
                <div class="two-col left">
                    <h3 class="uppercase">Call Us</h3>
                    <p>
                        P+ 1877.678.6543 <br/>
                        F+ 1877.678.6543 <br/>
                        <a href="mailto:info@wealthlagacyinstitute.com">info@wealthlagacyinstitute.com</a>
                    </p>
                </div>
                <div class="eleven-col left">
                    <div class="map">
                        <iframe width="500" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=wealth+legacy+institute+denver&amp;aq=&amp;sll=39.695795,-104.923382&amp;sspn=0.032757,0.053215&amp;ie=UTF8&amp;hq=wealth+legacy+institute&amp;hnear=Denver,+Colorado&amp;t=m&amp;cid=2056682025475608752&amp;ll=39.714054,-104.908447&amp;spn=0.066025,0.145912&amp;z=12&amp;iwloc=A&amp;output=embed&iwloc=near"></iframe>
                    </div>
                </div>
            </div>
    </div>
    


<?php get_footer(); ?>
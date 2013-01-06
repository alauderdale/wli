<?php
/*
Template Name: legal/terms
 */
?>
<?php get_header(); ?>

<div class="hero terms-hero" style="background-image:url(<?php bloginfo('template_url'); ?>/images/page_bg.png);">
        <div class="wrapped hero-content blog-hero">
            <h1><?php the_title(); ?></h1>
        </div><!-- end hero content -->
    </div><!-- end hero -->
<div class="clearfix"></div>
<div class="wrapped">
    <!--start the loop-->
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?> 
            <!--end the loop-->
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
</div>
<?php get_footer(); ?>
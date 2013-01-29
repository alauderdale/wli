

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
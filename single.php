<?php get_header(); ?>

<div class="hero" style="background-image:url(<?php bloginfo('template_url'); ?>/images/blog_bg.png);">
        <div class="wrapped hero-content">
            <h1>Ideas &amp; Insights</h1>
        </div><!-- end hero content -->
    </div><!-- end hero -->
    <div class="clearfix"></div>
    <div class="wrapped">
        <div class="blog">
            <div class="blog-main">
                <!--start the loop-->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <h1 class="heading">
                                <?php the_title(); ?> 
                        </h1>
                        <h3 class="date">
                            <?php the_date(); ?> 
                        </h3>
                        <div class="featured-img">
                            <?php 
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                  the_post_thumbnail();
                                } 
                            ?>
                        </div>
                        <div class="content">
                            <?php the_content(); ?> 
                        </div>
                        <ul class="post-meta">
                            <li>
                                <a href="<?php the_permalink(); ?>" class="arrow-link continue-reading">
                                    Continue Reading
                                </a>
                            </li>
                            <li>
                                <a href="#" class="share">
                                    Share
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                <!--end the loop-->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
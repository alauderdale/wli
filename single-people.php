                <div style="width:700px;">


                <!--start the loop-->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail();
                    } 
                ?>
                <h3><?php the_title(); ?></h3>
                <p class="gold"><?php echo get_post_meta($post->ID, 'job_title', true); ?></p>
                <?php the_content(); ?>
                <!--end the loop-->
                <?php endwhile; ?>
                <?php endif; ?>

                </div>



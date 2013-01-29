                <div class="person-overlay">

                    <div class="person-overlay-inner">
                        <!--start the loop-->
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="left person-img">
                                <?php 
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                  the_post_thumbnail();
                                } 
                                ?>
                                <ul class="personal-social">
                                    <?php 
                                        $facebook_mata = get_post_meta($post->ID, 'facebook_url', true);
                                        $twitter_mata = get_post_meta($post->ID, 'twitter_url', true);
                                        $linkedin_mata = get_post_meta($post->ID, 'linkedin_url', true);
                                        if($facebook_mata != '') 
                                        {
                                          echo '<li><a target="_blank" href="',$facebook_mata,'">f</a></li>';
                                        } 
                                        if($twitter_mata != '') 
                                        {
                                          echo '<li><a target="_blank" href="',$twitter_mata,'">t</a></li>';
                                        } 
                                        if($linkedin_mata != '') 
                                        {
                                          echo '<li><a target="_blank" href="',$linkedin_mata,'">i</a></li>';
                                        } 
                                    ?> 
                                </ul>
                            </div>
                            <div class="left person-descript">
                                <h3><?php the_title(); ?></h3>
                                <p class="gold"><?php echo get_post_meta($post->ID, 'job_title', true); ?></p>
                                <?php the_content(); ?>
                            </div>
                        <!--end the loop-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>



<div class="clearfix"></div>
<footer>
        <div class="wrapped">
            <div class="footer-col four-col left">
                <h1>From The Blog</h1>
                <?php
                $footerloop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
                 ?>
                 <?php while ( $footerloop->have_posts() ) : $footerloop->the_post(); ?>
                    <div class="footer-post">
                        <a href="<?php the_permalink(); ?>">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <p>
                                <?php echo excerpt(15); ?>
                            </p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="footer-col four-col left">
                <h1>Twitter</h1>
                <div class="footer-twitter">
                <?php 
                    if ( dynamic_sidebar('twitter') ) : 
                ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="footer-col four-col left">
                <h1>Get in Touch</h1>
                <div class="footer-post">
                        <p>
                            e. info@wealthlegacyinstitute.com
                            <br/>
                            p. 303.753.7578
                        </p>
                </div>
                <div class="footer-post">
                        <p>
                            950 South Cherry Street #505, 
                            <br/>
                            Denver, CO 
                            <br/>
                            80246
                        </p>
                </div>
                <div class="footer-post">
                    <a class="left footer-button" href="index.php?pagename=contact">
                        Request Our Services
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="footer-menu">
            <div class="wrapped">
                <div class="copyright left">
                    <p>
                    &copy; 2012 Wealth Legacy Institute        
                    </p>                                      
                </div>
                <div class="footer-nav" >
                    <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
                </div>
                <div class="right">
                    <ul class="footer-social">
                        <li>
                            <a href="https://twitter.com/WLILegacy/status/277109387552772096" target="_blank" class="twitter">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.facebook.com/pages/Wealth-Legacy-Institute/110178622336160" target="_blank" class="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="http://www.brightscope.com/financial-planning/firm/63768/Wealth-Legacy-Institute-Inc/" target="_blank" class="bs">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
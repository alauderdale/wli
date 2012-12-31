<sidebar class="blog-sidebar">
                <div class="sidebar-section">
                    <h1>Categories</h1>
                    <ul>
                        <?php 
                                $args = array(
                                'title_li'           => __( '' ),
                                'exclude'            => '1'
                                ); 
                                ?>
                        <?php wp_list_categories($args); ?> 
                    </ul>
                </div>
                <div class="sidebar-section">
                    <h1>Archive</h1>
                    <ul>
                        <?php wp_get_archives('type=monthly&limit=12'); ?>
                    </ul>
                </div>
            </sidebar>
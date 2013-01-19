<?php
    
    //global options







    //thumbnails

    if ( function_exists( 'add_theme_support' ) ) {
      add_theme_support( 'post-thumbnails' );
    }
        
    //main nav
    
    register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
    register_nav_menu( 'terms', __( 'terms navigation menu in footer', 'mytheme' ) );


    //    exerpt

    function new_excerpt_more( $more ) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function custom_excerpt_length( $length ) {
        return 55;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


    function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }

    /*** Register our sidebars and widgetized areas.**/
    function wli_widgets_init() {

        register_sidebar( array(
            'name' => 'twitter',
            'id' => 'twitter',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
            ) 
        );

        register_sidebar( array(
            'name' => 'address',
            'id' => 'address',
            'before_widget' => '',
            'after_widget' => '',
            'class'         => '',
            'before_title' => '',
            'after_title' => '',
            ) 
        );


        
    }
    add_action( 'widgets_init', 'wli_widgets_init' ); 


    //create post types
    
    add_action( 'init', 'create_my_post_types' );
    
    function create_my_post_types() {
    
        register_post_type( 'slider_content',
            array(
                'labels' => array(
                    'name' => __( 'Slider Content' ),
                    'singular_name' => __( 'Slider' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'process_step',
            array(
                'labels' => array(
                    'name' => __( 'Process Steps' ),
                    'singular_name' => __( 'Step' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'people',
            array(
                'labels' => array(
                    'name' => __( 'Meet Us' ),
                    'singular_name' => __( 'person' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'service',
            array(
                'labels' => array(
                    'name' => __( 'services' ),
                    'singular_name' => __( 'service' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'home_service',
            array(
                'labels' => array(
                    'name' => __( 'Home Services' ),
                    'singular_name' => __( 'Homepage Service' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );

        register_post_type( 'partner',
            array(
                'labels' => array(
                    'name' => __( 'Trusted By' ),
                    'singular_name' => __( 'partner' )
                ),
                'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail' ),
                'public' => true,
    
            )
        );
    }

    ///create portfolio categories
    
     // function my_custom_taxonomies() {
     //    register_taxonomy(
     //        's_highlight',     // internal name = machine-readable taxonomy name
     //        'service',      // object type = post, page, link, or custom post-type
     //        array(
     //            'hierarchical' => true,
     //            'label' => 'Service highlights',    // the human-readable taxonomy name
     //            'query_var' => true,    // enable taxonomy-specific querying
     //            'rewrite' => array( 'slug' => '?highlight=' ),   // pretty permalinks for your taxonomy?
     //        )
     //    );

     // }

     // add_action('init', 'my_custom_taxonomies', 0);


    function my_admin_scripts() {
         wp_enqueue_script('media-upload');
         wp_enqueue_script('thickbox');
         wp_register_script('my-upload', get_bloginfo('template_url') . '/javascripts/functions-script.js', array('jquery','media-upload','thickbox'));
         wp_enqueue_script('my-upload');
     }
     function my_admin_styles() {
        wp_enqueue_style('thickbox');
     }
     add_action('admin_print_scripts', 'my_admin_scripts');
     add_action('admin_print_styles', 'my_admin_styles');
    
    $prefix = 'wli';

    $meta_boxes = array(
        ///slider
        array(
            'id' => 'my-meta-box-1',
            'title' => 'Slider Options',
            'pages' => array('slider_content'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'call to action text',
                    'desc' => 'add text for the homepage call to action button',
                    'id' => 'call_to_action',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'call to action link',
                    'desc' => 'add a link for the homepage call to action button',
                    'id' => 'call_to_action_link',
                    'type' => 'text',
                    'std' => ''
                )
            )
        ),
        ///page
        array(
            'id' => 'my-meta-box-2',
            'title' => 'Page Options',
            'pages' => array('page'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'Hero Title',
                    'desc' => 'add text for the hero title',
                    'id' => 'hero_title',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Hero Sub Text',
                    'desc' => 'add sub text for the hero title',
                    'id' => 'hero_sub',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                 'name' => 'Hero Background',
                 'desc' => 'Select a hero background image',
                 'id' => 'upload_image',
                 'type' => 'text',
                 'std' => ''
                ),
                array(
                     'name' => '',
                     'desc' => 'Select a hero background image',
                     'id' => 'upload_image_button',
                     'type' => 'button',
                     'std' => 'Browse'
                ),
            )
        ),
        ///meet us
        array(
            'id' => 'my-meta-box-3',
            'title' => 'Meet Us Options',
            'pages' => array('people'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'Job Title',
                    'desc' => 'add text for job title',
                    'id' => 'job_title',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Twitter Url',
                    'desc' => 'add url for Twitter',
                    'id' => 'twitter_url',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Facebook Url',
                    'desc' => 'add url for Facebook',
                    'id' => 'facebook_url',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'LinkedIn Url',
                    'desc' => 'add url for LinkedIn',
                    'id' => 'linkedin_url',
                    'type' => 'text',
                    'std' => ''
                ),
            )
        ),
        ///services
        array(
            'id' => 'my-meta-box-4',
            'title' => 'Meet Us Options',
            'pages' => array('service'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'Main title',
                    'desc' => 'enter the title for summary',
                    'id' => 'title_text',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Bullets',
                    'desc' => 'enter bullets',
                    'id' => 'bullets',
                    'type' => 'textarea',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary title 1',
                    'desc' => 'enter title',
                    'id' => 'sum_title_1',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary title 2',
                    'desc' => 'enter title',
                    'id' => 'sum_title_2',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary title 3',
                    'desc' => 'enter title',
                    'id' => 'sum_title_3',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary 1',
                    'desc' => 'enter title',
                    'id' => 'sum_1',
                    'type' => 'textarea',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary 2',
                    'desc' => 'enter title',
                    'id' => 'sum_2',
                    'type' => 'textarea',
                    'std' => ''
                ),
                array(
                    'name' => 'Summary 3',
                    'desc' => 'enter title',
                    'id' => 'sum_3',
                    'type' => 'textarea',
                    'std' => ''
                ),
                array(
                    'name' => 'Call to action text',
                    'desc' => 'enter the text for this services call to action',
                    'id' => 'cta_text',
                    'type' => 'text',
                    'std' => ''
                ),
            )
        ),

        ///home service
        array(
            'id' => 'my-meta-box-5',
            'title' => 'Home Service Options',
            'pages' => array('home_service'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'call to action text',
                    'desc' => 'add text for the service call to action button',
                    'id' => 'service_call_to_action_text',
                    'type' => 'text',
                    'std' => ''
                ),
                array(
                    'name' => 'call to action URL',
                    'desc' => 'add URL for the service call to action button',
                    'id' => 'service_call_to_action_url',
                    'type' => 'text',
                    'std' => ''
                )
            )
        ),
        ///partners
        array(
            'id' => 'my-meta-box-6',
            'title' => 'Partner Options',
            'pages' => array('partner'), // multiple post types
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
                array(
                    'name' => 'Partner URL',
                    'desc' => 'add URL for the partner',
                    'id' => 'partner_url',
                    'type' => 'text',
                    'std' => ''
                ),
            )
        ),
    );

    add_action('admin_menu', 'mytheme_add_box');

    // Add meta box
    function mytheme_add_box() {
        global $meta_box;
    
        add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
    }


    foreach ($meta_boxes as $meta_box) {
        $my_box = new My_meta_box($meta_box);
    }

    class My_meta_box {
     
        protected $_meta_box;
     
        // create meta box based on given data
        function __construct($meta_box) {
            $this->_meta_box = $meta_box;
            add_action('admin_menu', array(&$this, 'add'));
     
            add_action('save_post', array(&$this, 'save'));
        }
     
        /// Add meta box for multiple post types
        function add() {
            foreach ($this->_meta_box['pages'] as $page) {
                add_meta_box($this->_meta_box['id'], $this->_meta_box['title'], array(&$this, 'show'), $page, $this->_meta_box['context'], $this->_meta_box['priority']);
            }
        }
     
        // Callback function to show fields in meta box
        function show() {
            global $post;
     
            // Use nonce for verification
            echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
     
            echo '<table class="form-table">';
     
            foreach ($this->_meta_box['fields'] as $field) {
                // get current post meta data
                $meta = get_post_meta($post->ID, $field['id'], true);
     
                echo '<tr>',
                        '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
                        '<td>';
                switch ($field['type']) {
                    case 'text':
                        echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
                            '<br />', $field['desc'];
                        break;
                    case 'textarea':
                        echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
                            '<br />', $field['desc'];
                        break;
                    case 'select':
                        echo '<select name="', $field['id'], '" id="', $field['id'], '">';
                        foreach ($field['options'] as $option) {
                            echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
                        }
                        echo '</select>';
                        break;
                    case 'radio':
                        foreach ($field['options'] as $option) {
                            echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
                        }
                        break;
                    case 'button':
                        echo '<input type="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
                        break;
                }
                echo     '<td>',
                    '</tr>';
            }
     
            echo '</table>';
        }
     
        // Save data from meta box
        function save($post_id) {
            // verify nonce
            if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
                return $post_id;
            }
     
            // check autosave
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return $post_id;
            }
     
            // check permissions
            if ('page' == $_POST['post_type']) {
                if (!current_user_can('edit_page', $post_id)) {
                    return $post_id;
                }
            } elseif (!current_user_can('edit_post', $post_id)) {
                return $post_id;
            }
     
            foreach ($this->_meta_box['fields'] as $field) {
                $old = get_post_meta($post_id, $field['id'], true);
                $new = $_POST[$field['id']];
     
                if ($new && $new != $old) {
                    update_post_meta($post_id, $field['id'], $new);
                } elseif ('' == $new && $old) {
                    delete_post_meta($post_id, $field['id'], $old);
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?php wp_title(''); ?> <?php bloginfo('name'); ?>
    </title>
<!-- stylesheets -->
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/royalslider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/rs-default.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" rel="stylesheet" type="text/css" media="screen" />

<!-- fonts -->
    <script type="text/javascript" src="//use.typekit.net/suy3bpz.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<!-- jquery -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">

<!-- slider -->
    <script src="<?php bloginfo('template_url'); ?>/javascripts/jquery.royalslider.min.js"></script>
<!-- custom scripts -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <div class="admin-bar">
        <div class="wrapped">
            <div class="admin-bar-content">
                <p>
                    Call us 1.877.444.4444
                </p>
                <p>
                    <a class="login-button" href="#">   
                        client login
                    </a>
                </p>
            </div>
        </div>
    </div><!-- end adminbar -->
    <div class="main-nav">
        <div class="wrapped">
            <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>
            <div class="logo"><a href="<?php echo get_option('home'); ?>"></a></div>
        </div><!-- end wrapped -->
    </div><!-- end main nav -->
    </header>
    <div class="top-padding"></div>
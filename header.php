<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">

        <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &#124; <?php } ?> <?php wp_title(); ?></title>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.js"></script>
          <script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
        <![endif]-->

        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
            <?php
                // Fix admin bar overlap bug.
                if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>';
            ?>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '%3$s', 'theme_location' => 'navbar-menu' ) ); ?>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?php bloginfo('url') ?>" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search <?php bloginfo('name'); ?>" id="s" name="s">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </div><!-- /.navbar -->
        <div class="container">
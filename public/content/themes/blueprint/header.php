<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <link rel="icon" href="<?php bloginfo('url'); ?>/favicon.ico" />

  <!-- feed URLS -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>

</head>

<body <?php body_class();?>>
	<header class="main">
        <div class="logo"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/assets/[ACF FIELD NEEDED]" alt="[ACF FIELD NEEDED]" title="[ACF FIELD NEEDED]" /></a></div>

        <div class="menu-container">
            <?php wp_nav_menu( array( 'theme_location' => 'Secondary' ) ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'Main' ) ); ?>
        </div>
	</header>

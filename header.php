<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
  <!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
      <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
        <head>
          <meta charset="utf-8">

          <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

          <meta name="viewport" content="width=device-width; initial-scale=1.0">

          <?php echo get_stylesheets(); ?>

          <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-1.7.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.5.2.min.js'>\x3C/script>")</script>

<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<?php if (get_option('roots_google_analytics') !== "") { ?>
<script>
var _gaq=[["_setAccount","<?php echo get_option('roots_google_analytics') ?>"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
<?php } ?>
</head>
<body <?php $page_slug = $post->post_name; body_class($page_slug); ?>>
  <div id="wrap" role="document">
    <div id="main">
      <div id="header-bar"></div>
      <div class="container">
        <header id="banner" class="<?php echo roots_container_class; ?>" role="banner">
        <div class="span-5">
          <a id="logo" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="168" height="87" alt="<?php bloginfo('name'); ?>"></a>
        </div><!--/.span-5-->
        <div class="span-19 last">
          <nav id="nav-main" class="<?php echo roots_container_class; ?>" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
          </nav>
          <h2>The Command Centre For Your Startup</h2>
        </div><!--/.span-17-->
        </header>
      </div><!-- /.container -->
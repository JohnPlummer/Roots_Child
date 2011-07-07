<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
  <!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
      <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

          <?php echo get_stylesheets(); ?>

          <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">


<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/respond.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.6.1.min.js"><\/script>')</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/deobfuscator_plugin.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>

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
    <div id="content-less-footer">
      <div id="header-bar"></div>
      <div class="container">
        <header id="banner" class="<?php echo roots_container_class; ?>" role="banner">
        <div class="span-5">
          <div id="green-flash"></div>
          <a id="logo" href="<?php echo home_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="168" height="87" alt="<?php bloginfo('name'); ?>"></a>
        </div><!--/.span-5-->
        <div class="span-19 last">
          <canvas id="right-curve" width="14" height="14"></canvas>
          <nav id="nav-main" class="<?php echo roots_container_class; ?>" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?>
          </nav>
          <canvas id="left-curve" width="14" height="14"></canvas>
          <h1>The Command Centre For Your Startup</h1>
        </div><!--/.span-19-->
        </header>
      </div><!-- /.container -->
      <div class="container">
        <div id="content" class="<?php echo roots_container_class; ?>">	
          <div id="main" role="main">

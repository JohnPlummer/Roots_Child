<?php
/*
Template Name: Home Page
 */
get_header(); ?>
<div class="container test">
<!-- My Template -->
  <div id="content" class="<?php echo roots_container_class; ?>">	
    <div id="main" class="<?php echo roots_container_class; ?>" role="main">
      <div class="container">
        <?php get_template_part('loop', 'page'); ?>
      </div>
    </div><!-- /#main -->
  </div><!-- /#content -->
</div><!-- /.container -->
<?php get_footer(); ?>

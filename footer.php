</div><!-- /#main -->
    </div><!-- /#content -->
  </div><!-- /.container -->
</div><!-- #main -->
</div><!-- #wrap -->
<div id="footer-bar">
  <div class="container">
    <footer id="content-info" class="<?php echo roots_container_class; ?>" role="contentinfo">
    <div class="span-22">
      <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
      <nav id="nav-footer"> <?php wp_nav_menu(array('theme_location' => 'primary_navigation')); ?></nav>
    </div>	
    <div class="span-2 last">
      <img width="98" height="73" align="right" src="<?php bloginfo('stylesheet_directory'); ?>/img/footer_logo.gif">
    </div>
    </footer>
  </div><!-- .container -->
</div><!-- #footer-bar -->
<?php wp_footer(); ?>
</body>
</html>

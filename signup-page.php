<?php
/*
Template Name: Signup Page
 */
get_header(); ?>
<h1>Signup</h1>
<div class="container large-text">
  <div class="<?php echo $roots_options['main_class']; ?>">
    <div class="unboxed first-unboxed">
      If you're interested early access, or would just like to be kept updated,
      please sign up. I'll send you the occasional email to let you know how
      Furld is progressing and I'll register you for early access.
    </div>
  </div><!--/.span-16-->
  <div class="<?php echo $roots_options['sidebar_class']; ?>">
    <div class="boxed contact">
      <form action="http://furld.us2.list-manage1.com/subscribe/post?u=1312d42d845c540499ef0ce6d&amp;id=321951a6f1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
        <div class="mc-field-group">
          <input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email address here" >
        </div>
        <div id="mce-responses">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div><button type="submit" id="mc-embedded-subscribe" class="big-button btn">
            <span>
              <strong>Get Early Access</strong>
              <br/>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
            </span>
          </div>
        </form>
      </div>
    </div><!--/.span-8-->
  </div><!--/.container-->
  <?php get_footer(); ?>

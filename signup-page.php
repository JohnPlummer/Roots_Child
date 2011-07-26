<?php
/*
Template Name: Signup Page
 */
get_header(); ?>
<h1>Sign Up</h1>
<div class="container large-text">
  <div class="<?php echo $roots_options['main_class']; ?>">
    <div class="unboxed first-unboxed">
      <p>Use the great tools that are popping up for startups
      and use Furld to manage and synchronize your data between them.</p>
      <p>Register to get early access and an occasional newsletter.</p>
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
              <br/>I promise your email will only be used to send a newsletter, updates, and an early access invitation.
            </span>
          </div>
        </form>
      </div>
    </div><!--/.span-8-->
  </div><!--/.container-->
  <?php get_footer(); ?>

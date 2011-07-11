<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php roots_post_before(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<?php roots_post_inside_before(); ?>
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<time pubdate datetime="<?php the_time('c'); ?>"><?php printf( __('%s','roots'), get_the_time('l, F jS, Y') ) ?></time>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
      <p>Posted by <span class="author"><?php the_author_posts_link(); ?></span></p>
				<p><?php the_tags(); ?></p>
        </footer>
        <div class="divider"></div>
			<?php comments_template(); ?>
			<?php roots_post_inside_after(); ?>		
		</article>
	<?php roots_post_after(); ?>
<?php endwhile; // End the loop ?>

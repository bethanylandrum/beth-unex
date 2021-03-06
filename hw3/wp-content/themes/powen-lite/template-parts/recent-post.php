<div id="powen-most-latest-post" class="powen-most-recent-post">
	<?php do_action( 'powen_recent_post_top_extras' ); ?>

	<div class ="powen-featured-img">
	<a href ="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" >
	<?php the_post_thumbnail('full'); ?>
	</a>
	</div>

	<div class="article-hentry">
		<header class ="entry-header">
			<?php the_title( sprintf( '<h2 class ="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<div class="entry-meta">
			<?php powen_posted_on(); ?>
			<?php powen_the_author(); ?>
		</div>

		</header>

		<div class="powen-latest-post-tag"><span class="hvr-curl-bottom-right"><?php echo esc_textarea( powen_mod( 'latest_post', 'Latest' ), 'powen-lite' ); ?></span></div>

		<div class="entry-content">
			<?php powen_content(); ?>
		</div>

		<footer class="entry-footer">
			<?php powen_entry_footer(); ?>
			<?php do_action( 'powen_recent_post_bottom_extras' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</div>
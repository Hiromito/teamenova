<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

	<section class="entry-content" itemprop="text">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell large-2 medium-2 small-12 show-for-medium">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="cell large-10 medium-10 small-12">
				<p class="post-date"><?php the_time('F j, Y') ?></p>
				<a class="post-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>
		</div>
	</section> <!-- end article section -->

</article> <!-- end article -->

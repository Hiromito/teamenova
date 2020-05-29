<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

	<main class="main content news" role="main">
		<div class="latest-post">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">

							<?php $query = new WP_Query( array(
								'posts_per_page' => 1,
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post'
								)
							); ?>

							<?php if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post(); ?>
									<div class="small-12 medium-2 large-2 cell">
										<?php echo the_post_thumbnail('full'); ?>
									</div>
									<div class="small-12 medium-10 large-10 cell">
										<p class="post-date"><?php the_time('F j, Y') ?></p>
										<a class="featured-post" href="<?php echo the_permalink(); ?>">
											<?php echo the_title(); ?>
										</a>
										<?php echo the_excerpt(); ?>
										<strong><a href="<?php echo the_permalink(); ?>">Continue Reading &raquo;</a></strong>
								</div>
								<?php }
								/* Restore original Post Data */
								wp_reset_postdata();
							} else {
								// no posts found
							} ?>

					</div>
				</div>
			</div>

			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
			    <div class="small-12 medium-8 large-8 cell">
						<h4 class="widgettitle">Latest News and Updates</h4>

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<!-- To see additional archive styles, visit the /parts directory -->
							<?php get_template_part( 'parts/loop', 'archive-news' ); ?>

							<?php endwhile; ?>

								<?php joints_page_navi(); ?>

							<?php else : ?>

								<?php get_template_part( 'parts/content', 'missing' ); ?>

							<?php endif; ?>

					</div>

		    	<?php get_sidebar('events'); ?>

			</div>
		</div>
	</main>

<?php get_footer(); ?>

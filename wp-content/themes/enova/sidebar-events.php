<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar-events" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
  <h4 class="widgettitle">Upcoming Events</h4>
  <?php if( have_rows('upcoming_events', get_option('page_for_posts')) ): ?>

	<ul>

	<?php while( have_rows('upcoming_events', get_option('page_for_posts')) ): the_row();
		$date = get_sub_field('date');
		$title = get_sub_field('title');
		$link = get_sub_field('link');
	?>

		<li>
      <p class="post-date"><?php echo $date; ?></p>
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
        <p class="event-title"><?php echo $title; ?></p>
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		    <?php echo $content; ?>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
</div>

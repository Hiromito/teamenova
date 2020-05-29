<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="grid-container">
	<div class="grid-x grid-margin-x grid-padding-x">
		<div class="small-12 medium-12 large-12 cell">
			<div class="top-bar" id="top-bar-menu">
				<div class="top-bar-left float-left">
					<?php the_custom_logo(); ?>
				</div>
				<div class="top-bar-right show-for-medium">
					<div class="text-right">
						<ul class="secondary-nav">
							<li><?php the_field('phone', 'option'); ?></li>
							<li><?php the_field('email', 'option'); ?></li>
						</ul>
					</div>
					<?php joints_top_nav(); ?>
				</div>
				<div class="top-bar-right float-right show-for-small-only">
					<ul class="menu">
						<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
						<!--<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

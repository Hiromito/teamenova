<div class="banner" style="background-image: url(<?php the_field('hero_bkg'); ?>); background-color: <?php the_field('hero_color'); ?>">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-padding-x">
			<div class="small-12 medium-7 large-7 cell align-self-middle">
				<h1><?php the_field('hero_headline'); ?></h1>
				<?php the_field('hero_subhead'); ?>
			</div>
			<?php $hero_img = get_field('hero_img');
			if( ($hero_img) ): ?>
				<div class="small-12 medium-5 large-5 cell align-self-middle text-right banner-image">
					<img src="<?php echo $hero_img['url']; ?>" alt="<?php echo $hero_img['alt']; ?>" />
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

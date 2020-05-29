<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="content">
	<main class="main" role="main">
		<div class="home-hero" style="background-image: url(<?php the_field('hero_image'); ?>)">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<div class="small-12 cell mobile-image show-for-small-only">
						<?php $hero_image_mobile = get_field('hero_image_mobile');
							if( !empty($hero_image_mobile) ): ?>
								<img src="<?php echo $hero_image_mobile['url']; ?>" alt="<?php echo $hero_image_mobile['alt']; ?>" />
						<?php endif; ?>
					</div>
					<div class="small-12 medium-6 large-7 cell align-self-middle">
						<?php the_field('hero_headline'); ?>
						<?php the_field('hero_subhead'); ?>
					</div>
				</div>
			</div>
		</div>
	</main> <!-- end #main -->
</div> <!-- end #content -->

<?php get_template_part( 'parts/content', 'layout' ); ?>

<?php if( have_rows('news') ): ?>

	<div class="grid-container home-news">
		<div class="grid-x grid-margin-x grid-padding-x medium-up-3 small-up-1">

	<?php while( have_rows('news') ): the_row();
		$article = get_sub_field('article');
	?>

		<div class="cell">
			<?php $news_thumb = get_field('homepage_thumbnail', $article->ID);
				if( !empty($news_thumb) ): ?>
				<a href="<?php echo get_permalink($article->ID); ?>">
					<img src="<?php echo $news_thumb['url']; ?>" alt="<?php echo $news_thumb['alt']; ?>" />
				</a>
			<?php endif; ?>
			<a href="<?php echo get_permalink($article->ID); ?>">
				<?php echo get_the_title($article->ID); ?>
			</a>
            <div class="home-excerpt"><?php echo get_the_excerpt($article->ID); ?></div>
		</div>

	<?php endwhile; ?>

	</div>
</div>

<?php endif; ?>


<div class="home-contact" style="background-image: url(<?php the_field("home_contact_image"); ?>)">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-padding-x align-center">
			<div class="small-12 medium-10 large-10 cell text-center">
				<p><?php the_field('home_contact_headline'); ?></p>
			</div>
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="73" title="Contact"]' ); ?>
	</div>
</div>

<?php get_footer(); ?>

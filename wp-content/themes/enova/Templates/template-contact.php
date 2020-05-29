<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="contact-banner">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="cell large-6 medium-6 small-12 columns">
        <h1><?php the_field('headline'); ?></h1>
        <?php the_field('subhead'); ?>
      </div>
      <div class="cell large-6 medium-6 small-12 columns">
        <?php the_field('form'); ?>
      </div>
    </div>
  </div>
</div>

<div class="contact-office" style="background-image: url(<?php the_field('banner'); ?>)"></div>

<div class="grid-container contact-info">
  <div class="grid-x grid-padding-x grid-margin-x">

    <div class="cell large-6 medium-6 small-12">
      <div class="grid-x grid-padding-x grid-margin-x">
        <div class="cell large-12 medium-12 small-12">
          <h2 class="contact-heading"><?php the_field('contact_heading'); ?></h2>
        </div>
        <div class="cell large-6 medium-6 small-12">
          <?php the_field('contact1'); ?>
        </div>
        <div class="cell large-6 medium-6 small-12">
          <?php the_field('contact2'); ?>
        </div>
      </div>
    </div>

    <div class="cell large-3 medium-3 small-12">
      <h2 class="contact-heading"><?php the_field('social_heading'); ?></h2>
      <?php if( have_rows('channel') ): ?>

  	  <ul class="social-icons">
      	<?php while( have_rows('channel') ): the_row();
      		$icon = get_sub_field('icon');
      		$link = get_sub_field('link');
      	?>

      		<li>
            <a href="<?php echo $link; ?>" target="_blank">
              <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" />
      			</a>
      		</li>

      <?php endwhile; ?>
      </ul>

      <?php endif; ?>
    </div>
    <div class="cell large-3 medium-3 small-12">
      <h2 class="contact-heading"><?php the_field('careers_heading'); ?></h2>
      <?php
      $careers_cta = get_field('careers_cta');

      if( $careers_cta ):
      	$careers_cta_url = $careers_cta['url'];
      	$careers_cta_title = $careers_cta['title'];
      	$careers_cta_target = $careers_cta['target'] ? $careers_cta['target'] : '_self';
      	?>
      	<a class="button" href="<?php echo esc_url($careers_cta_url); ?>" target="<?php echo esc_attr($careers_cta_target); ?>"><?php echo esc_html($careers_cta_title); ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>

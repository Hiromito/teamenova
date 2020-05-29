<?php
/*
Template Name: Team
*/

get_header(); ?>

<?php get_template_part( 'parts/content', 'banner' ); ?>

<?php

if( have_rows('team') ):
    while ( have_rows('team') ) : the_row();

		if( get_row_layout() == 'our_vision' ):
      $headline = get_sub_field('headline');
			$columns = get_sub_field('columns');
		?>

    <div class="grid-container vision">
      <div class="grid-x grid-padding-x">
        <div class="cell large-up-12 medium-up-12 small-up-12 text-center">
          <div class="headline"><?php echo $headline; ?></div>
        </div>
      </div>
      <div class="grid-x grid-padding-x grid-margin-x large-up-<?php echo $columns;?> medium-up-<?php echo $columns;?> small-up-1">

        <?php while( have_rows('vision') ): the_row();
          $headline = get_sub_field('headline');
          $description = get_sub_field('description');
          $color = get_sub_field('color');
        ?>
            <div class="cell">
              <p class="vision-title" style="color: <?php echo $color; ?>;"><?php echo $headline; ?></p>
              <div class="vision-description">
                <?php echo $description; ?>
              </div>
            </div>
        <?php endwhile; ?>

        </div>
      </div>

    <?php elseif( get_row_layout() == 'our_staff' ):
      $headline = get_sub_field('headline');
      $background = get_sub_field('background');
			$columns = get_sub_field('columns');
		?>
    <div class="team" style="background-color: <?php echo $background; ?>;">
      <div class="grid-container">
        <div class="grid-x grid-padding-x">
          <div class="cell large-up-12 medium-up-12 small-up-12 text-center">
            <div class="headline"><?php echo $headline; ?></div>
          </div>
        </div>
        <div class="grid-x grid-padding-x large-up-<?php echo $columns;?> medium-up-<?php echo $columns;?> small-up-1">

          <?php while( have_rows('staff') ): the_row();
            $name = get_sub_field('name');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $bio = get_sub_field('bio');
            $photo = get_sub_field('photo');
          ?>
            <div class="cell team-member">
              <div class="grid-x grid-padding-x">
                <div class="large-3 medium-3 small-12 cell">
                  <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
                </div>
                <div class="large-9 medium-9 small-12 cell">
                  <p class="team-member-name" data-open="team-<?php echo get_row_index(); ?>"><?php echo $name; ?></p>
                  <p class="team-member-title"><?php echo $title; ?></p>
                  <?php echo $description; ?>
                  <button data-open="team-<?php echo get_row_index(); ?>">Read Full Bio &raquo;</button>
                </div>
              </div>
            </div>

            <div class="reveal small team-popup" id="team-<?php echo get_row_index(); ?>" data-reveal>
              <p class="team-member-name"><?php echo $name; ?></p>
              <p class="team-member-title"><?php echo $title; ?></p>
              <?php echo $bio; ?>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endwhile; ?>

        </div>
      </div>
    </div>

  <?php elseif( get_row_layout() == 'opportunities' ):
    $headline = get_sub_field('headline');
    $background = get_sub_field('background');
  ?>

    <div class="opportunities" style="background-color: <?php echo $background; ?>;">
      <div class="grid-container">
        <div class="grid-x grid-padding-x text-center">
          <div class="cell large-12 medium-12 small-12 columns">
            <div class="headline"><?php echo $headline; ?></div>
          </div>
        </div>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
          <?php while( have_rows('position') ): the_row();
            $title = get_sub_field('title');
            $description = get_sub_field('description');
          ?>
            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title"><?php echo $title; ?></a>
              <div class="accordion-content" data-tab-content>
                <?php echo $description; ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>

    <?php elseif( get_row_layout() == 'content_image' ):
      $headline = get_sub_field('headline');
      $content = get_sub_field('content');
      $image = get_sub_field('image');
      $image_orientation = get_sub_field('image_orientation');
      $background = get_sub_field('background');
    ?>

    <div class="team-content-image" style="background-color: <?php echo $background; ?>;">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-justify align-middle">
          <div class="cell large-6 medium-6 small-12 columns<?php if( $image_orientation == 'Right' ) { ?> large-order-1 medium-order-1<?php } else { ?> large-order-2 medium-order-2<?php } ?> small-order-2">
            <?php echo $headline; ?>
            <?php echo $content; ?>
          </div>
          <div class="cell large-5 medium-6 small-12 columns<?php if( $image_orientation == 'Right' ) { ?> large-order-2 medium-order-2<?php } else { ?> large-order-1 medium-order-1<?php } ?> small-order-1">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          </div>
        </div>
      </div>
    </div>

  <?php elseif( get_row_layout() == 'contact' ):
    $headline = get_sub_field('headline');
    $subhead = get_sub_field('subhead');
    $form = get_sub_field('form');
    $background = get_sub_field('background');
  ?>

  <div class="apply" style="background-color: <?php echo $background; ?>;">
    <div class="grid-container">
      <div class="grid-x grid-padding-x align-center">
        <div class="cell large-12 medium-12 small-12 columns text-center">
          <div class="headline"><?php echo $headline; ?></div>
          <?php echo $subhead; ?>
        </div>
        <div class="cell large-6 medium-10 small-12 columns">
          <?php echo $form; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

    <?php endwhile;

else :

    // no layouts found

endif;

?>

<?php get_footer(); ?>

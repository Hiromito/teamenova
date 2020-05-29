<?php

if( have_rows('layout') ):
    while ( have_rows('layout') ) : the_row();
    $count = 0;

		if( get_row_layout() == 'content_full' ):
			$full_headline = get_sub_field('full_headline');
			$full_subhead = get_sub_field('full_subhead');
			$full_button = get_sub_field('full_button');
			$full_button_color = get_sub_field('full_button_color');
			$full_background = get_sub_field('full_background');
		?>

    <?php if ($full_button):
      $full_button_url = $full_button['url'];
      $full_button_title = $full_button['title'];
      $full_button_target = $full_button['target'] ? $full_button['target'] : '_self';
    endif; ?>

			<div class="layout-content-full" style="background-color: <?php echo $full_background; ?>;">
				<div class="grid-container">
					<div class="grid-x grid-margin-x grid-padding-x">
						<div class="small-12 medium-12 large-12 cell text-center">
							<div class="headline"><?php echo $full_headline; ?></div>
							<div class="subhead"><?php echo $full_subhead; ?></div>
							<?php if( $full_button ): ?>
								<a class="button" href="<?php echo esc_url($full_button_url); ?>" target="<?php echo esc_attr($full_button_target); ?>" style="background-color: <?php echo $full_button_color; ?>"><?php echo esc_html($full_button_title); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
    </div>

    <?php elseif( get_row_layout() == 'content_image' ):
			$ci_headline = get_sub_field('ci_headline');
			$ci_subhead = get_sub_field('ci_subhead');
			$ci_button = get_sub_field('ci_button');
			$ci_button_color = get_sub_field('ci_button_color');
			$ci_image = get_sub_field('ci_image');
      $ci_imagemobile = get_sub_field('ci_imagemobile');
			$ci_orientation = get_sub_field('ci_orientation');
			$ci_background = get_sub_field('ci_background');
		?>

    <?php if ($ci_button):
      $ci_button_url = $ci_button['url'];
			$ci_button_title = $ci_button['title'];
			$ci_button_target = $ci_button['target'] ? $ci_button['target'] : '_self';
    endif; ?>

			<div class="layout-content-image hero-bkg<?php if( $ci_orientation == 'Right' ): ?> hero-right<?php elseif( $ci_orientation == 'Left' ): ?> hero-left<?php endif; ?>" style="background-image: url(<?php echo $ci_image; ?>); background-color: <?php echo $ci_background; ?>;">
				<div class="grid-container">
					<div class="grid-x grid-margin-x grid-padding-x <?php if( $ci_orientation == 'Left' ): ?>align-right<?php endif; ?>">
            <div class="small-12 cell mobile-image show-for-small-only">
  							<img src="<?php echo $ci_imagemobile['url']; ?>" alt="<?php echo $ci_imagemobile['alt']; ?>" />
  					</div>
						<div class="small-12 medium-6 large-7 cell align-self-middle">
							<?php echo $ci_headline; ?>
							<?php echo $ci_subhead; ?>
							<?php if( $ci_button ): ?>
								<a class="button" href="<?php echo esc_url($ci_button_url); ?>" target="<?php echo esc_attr($ci_button_target); ?>" style="background-color: <?php echo $ci_button_color; ?>"><?php echo esc_html($ci_button_title); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>

		<?php elseif( get_row_layout() == 'content_block' ):
			$cb_headline = get_sub_field('cb_headline');
			$cb_subhead = get_sub_field('cb_subhead');
			$cb_button = get_sub_field('cb_button');
			$cb_video = get_sub_field('cb_video');
      $cb_videoid = get_sub_field('cb_videoid');
      $cb_videoembed = get_sub_field('cb_videoembed');
      $cb_button_color = get_sub_field('cb_button_color');
			$cb_image = get_sub_field('cb_image');
			$cb_orientation = get_sub_field('cb_orientation');
			$cb_background = get_sub_field('cb_background');
		?>

    <?php if ($cb_button):
      $cb_button_url = $cb_button['url'];
      $cb_button_title = $cb_button['title'];
      $cb_button_target = $cb_button['target'] ? $cb_button['target'] : '_self';
    endif; ?>

			<div class="layout-content-block" style="background-color: <?php echo $cb_background; ?>;">
				<div class="grid-container full">
					<div class="grid-x">
						<div class="small-12 medium-6 large-6 cell align-self-middle block-content small-order-2<?php if( $cb_orientation == 'Left' ): ?> medium-order-2<?php endif; ?><?php if( $cb_orientation == 'Right' ): ?> medium-order-1<?php endif; ?>">
							<div class="rich-content<?php if ($cb_videoid) { ?> video-link" data-open="<?php echo $cb_videoid; ?>"><?php } ?><?php echo $cb_headline; ?></div>
							<?php echo $cb_subhead; ?>
							<?php if( $cb_button ): ?>
								<a class="button" href="<?php echo esc_url($cb_button_url); ?>" target="<?php echo esc_attr($cb_button_target); ?>" style="background-color: <?php echo $cb_button_color; ?>"><?php echo esc_html($cb_button_title); ?></a>
							<?php endif; ?>
						</div>
            <div class="small-12 medium-6 large-6 cell align-self-middle block-background hide-for-small-only<?php if( $cb_orientation == 'Left' ): ?> medium-order-1<?php endif; ?><?php if( $cb_orientation == 'Right' ): ?> medium-order-2<?php endif; ?>" style="background-image: url(<?php echo $cb_image; ?>);"></div>
            <div class="mobile-image mobile-block medium-6 small-12 cell small-order-1 show-for-small-only<?php if( $cb_orientation == 'Right' ): ?> hero-right<?php elseif( $cb_orientation == 'Left' ): ?> hero-left<?php endif; ?>">
              <?php if( $cb_video && in_array('Yes', $cb_video) ): ?>
                <div class="content-block-play show-for-small">
                  <img src="/wp-content/themes/enova/assets/images/play.png" alt="" data-open="<?php echo $cb_videoid; ?>">
                </div>
              <?php endif; ?>
              <img src="<?php echo $cb_image; ?>">
            </div>
					</div>
				</div>

        <?php if( $cb_video && in_array('Yes', $cb_video) ): ?>
          <div class="content-block-play">
            <img src="/wp-content/themes/enova/assets/images/play.png" alt="" data-open="<?php echo $cb_videoid; ?>">
          </div>
        <?php endif; ?>
			</div>

      <?php if( $cb_video && in_array('Yes', $cb_video) ): ?>
        <div class="reveal large video-reveal" id="<?php echo $cb_videoid; ?>" data-reveal data-reset-on-close="true">
          <?php echo $cb_videoembed; ?>
          <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>

    <?php elseif( get_row_layout() == 'services' ): ?>
      <?php if( have_rows('service_headlines') ): ?>

      <div class="grid-container">
        <div class="grid-x grid-padding-x large-up-5 medium-up-3 small-up-1 services-headline-container">

          <?php while( have_rows('service_headlines') ): the_row();
            $service_title = get_sub_field('service_title');
            $service_color = get_sub_field('service_color');
            $columns = get_sub_field('columns');
          ?>
            <div class="cell<?php if( $columns == 'Stretch' ): ?> services-stretch<?php endif; ?>">
              <div class="services-headline-title">
                <span style="color: <?php echo $service_color; ?>;"><?php echo $service_title; ?></span>
              </div>
            </div>
          <?php endwhile; ?>

        </div>
        <?php endif; ?>

      <?php if( have_rows('service') ): ?>
        <div class="grid-x grid-padding-x large-up-5 medium-up-3 small-up-1 services-container">

          <?php while( have_rows('service') ): the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $headline = get_sub_field('headline');
            $description = get_sub_field('description');
            $color = get_sub_field('color');
          ?>

            <div class="cell">
              <?php if ($title) { ?><div class="services-title">
                <span style="color: <?php echo $color; ?>;"><?php echo $title; ?></span>
              </div><?php } ?>
              <div class="text-center">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              </div>
              <p class="services-headline" style="color: <?php echo $color; ?>;"><?php echo $headline; ?></p>
              <span class="services-description"><?php echo $description; ?></span>
            </div>

          <?php endwhile; ?>

        </div>
      <?php endif; ?>

    <?php elseif( get_row_layout() == 'stakeholders' ):
      $headline = get_sub_field('headline');
      $subhead = get_sub_field('subhead');
      $background = get_sub_field('background');
    ?>
      <?php if( have_rows('stakeholder') ): ?>

      <div class="grid-container stakeholders-intro">
        <div class="grid-x grid-padding-x">
          <div class="cell large-12 medium-12 small-12 text-center">
            <div class="headline"><?php echo $headline; ?></div>
            <div class="subhead"><?php echo $subhead; ?></div>
          </div>
        </div>
      </div>
      <div class="grid-container full stakeholders" style="background-image: url(<?php echo $background; ?>);">
        <div class="grid-x large-up-4 medium-up-2 small-up-2 align-middle" data-equalizer>

          <?php while( have_rows('stakeholder') ): the_row();
            $headline = get_sub_field('headline');
            $subhead = get_sub_field('subhead');
            $color = get_sub_field('color');
          ?>
              <div class="cell text-center stakeholder-container" data-equalizer-watch>
                <div class="stakeholder-content">
                  <p class="stakeholder-headline"><?php echo $headline; ?></p>
                  <p class="stakeholder-subhead"><?php echo $subhead; ?></p>
                </div>
                <div class="stakeholder-overlay" style="background-color: <?php echo $color; ?>"></div>
              </div>
          <?php endwhile; ?>

          </div>
          <div class="radius-direct-arrow">
            <img src="/wp-content/themes/enova/assets/images/radius-direct-arrow.png" alt="Radius Direct">
          </div>
        </div>
      <?php endif; ?>

    <?php elseif( get_row_layout() == 'radius_direct' ):
      $headline = get_sub_field('headline');
      $subhead = get_sub_field('subhead');
      $logo = get_sub_field('logo');
    ?>
      <?php if( have_rows('rd_value') ): ?>

      <div class="layout-radius-direct">
        <div class="grid-container radius-direct-intro">
          <div class="grid-x grid-padding-x">
            <div class="cell large-12 medium-12 small-12 text-center">
              <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
              <div class="headline"><?php echo $headline; ?></div>
              <div class="subhead"><?php echo $subhead; ?></div>
            </div>
          </div>
        </div>

        <div class="grid-container">
          <div class="radius-direct-value grid-x grid-padding-x large-up-4 medium-up-4 small-up-1 align-top" data-equalize-on="medium" data-equalizer>

            <?php while( have_rows('rd_value') ): the_row();
              $image = get_sub_field('image');
              $headline = get_sub_field('headline');
              $description = get_sub_field('description');
            ?>
              <div class="cell">
                <div class="radius-direct-content">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <div data-equalizer-watch>
                    <p class="radius-direct-headline"><?php echo $headline; ?></p>
                  </div>
                  <div class="radius-link">
                    <img src="/wp-content/themes/enova/assets/images/radius-link.png">
                  </div>
                </div>
                <div class="radius-direct-description">
                  <?php echo $description; ?>
                </div>
              </div>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
      <?php endif; ?>

    <?php endif;
    $count++;

    endwhile;

else :

    // no layouts found

endif;

?>

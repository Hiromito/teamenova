<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="grid-x">
							<div class="small-12 medium-8 large-8 cell">
								<p class="footer-newsletter"><?php the_field('footer_signup', 'option'); ?></p>
                <div id="mc_embed_signup">
                  <form action="https://delindesign.us20.list-manage.com/subscribe/post?u=4df2edc7dd8bc806bd232801e&amp;id=89f3932d66" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                    <div class="grid-x grid-grid-margin-x grid-padding-x">
                      <div class="small-12 medium-10 large-10 cell text-center">
                        <div class="mc-field-group">
                        	<input type="email" value="" name="EMAIL" class="required email" placeholder="Email" id="mce-EMAIL">
                        </div>
                      </div>
                      <div class="small-12 medium-2 large-2 cell text-center">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                      </div>
                    </div>
                  	<div id="mce-responses" class="clear">
                  		<div class="response" id="mce-error-response" style="display:none"></div>
                  		<div class="response" id="mce-success-response" style="display:none"></div>
                  	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4df2edc7dd8bc806bd232801e_89f3932d66" tabindex="-1" value=""></div>
                  </div>
                  </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
							</div>
              <div class="small-12 medium-4 large-4 cell text-right">
                <?php if( have_rows('footer_social', 'option') ): ?>
              	  <ul class="social-icons">
                  	<?php while( have_rows('footer_social', 'option') ): the_row();
                  		$footer_social_icon = get_sub_field('footer_social_icon');
                  		$footer_social_link = get_sub_field('footer_social_link');
                  	?>
                  		<li>
                        <a href="<?php echo $footer_social_link; ?>" target="_blank">
                          <img src="<?php echo $footer_social_icon['url']; ?>" alt="<?php echo $footer_social_icon['alt'] ?>" />
                  			</a>
                  		</li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
						</div>
						<div class="small-12 medium-12 large-12 cell footer-bottom">
							<nav role="navigation">
								<?php joints_footer_links(); ?>
                                <div class="copyright">
                                    &copy; <?php echo date('Y'); ?> <?php the_field('footer_copyright', 'option') ?>
                                    <?php if( have_rows('legal_links', 'option') ): ?>
                                        <ul>
                                            <?php while( have_rows('legal_links', 'option') ): the_row();
                                                $link = get_sub_field('link');
                                                ?>
                                            <?php if( $link ):
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            endif; ?>
                                            <li>
                                                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
							</nav>
						</div>
					</div>
				</footer> <!-- end .footer -->
			</div>  <!-- end .off-canvas-content -->
		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->

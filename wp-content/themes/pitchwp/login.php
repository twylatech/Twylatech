<?php
/*
Template Name: Login
*/

if ( is_user_logged_in() ) {
	wp_redirect( site_url( '/' ) );
}

$pitch_sidebar = pitch_qode_get_sidebar_layout( false );

$enable_page_comments = get_post_meta(pitch_qode_get_page_id(), "qode_enable-page-comments", true) == 'yes';

$background_style = '';
if(pitch_qode_options()->getOptionValue( 'login_page_image' ) !== '' ) {
	$background_style .= 'style=background-image:url('. esc_url(pitch_qode_options()->getOptionValue( 'login_page_image' )) .')';
}

?>
<?php get_header(); ?>
<?php get_template_part( 'title' ); ?>
<?php get_template_part('slider'); ?>
	<div class="full_width" <?php pitch_qode_inline_page_background_style(); ?>>
		<div class="full_width_inner" <?php pitch_qode_inline_page_padding_style(); ?>>
			<div class="login_holder" <?php echo esc_attr($background_style); ?>>
				<div class="login_holder_inner">
			<?php if(($pitch_sidebar == "default")||($pitch_sidebar == "")) : ?>
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<?php if(pitch_qode_options()->getOptionValue( 'login_page_title' ) != '' ) { ?>
						<div class="login_title_holder">
							<h2 class="login_title"><?php echo esc_attr(pitch_qode_options()->getOptionValue( 'login_page_title' )); ?></h2>
						</div>
						<?php } ?>
						<?php if(pitch_qode_options()->getOptionValue( 'login_page_subtitle' ) != '' ) { ?>
						<div class="login_subtitle_holder">
							<h5 class="login_subtitle"><?php echo esc_attr(pitch_qode_options()->getOptionValue( 'login_page_subtitle' )); ?></h5>
						</div>
						<?php } ?>
						<?php the_content(); ?>
						<div class="loginform_holder">
							<div class="loginform_holder_inner">
								<form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ) ?>" method="post">
										<span class="form_input_holder">
											<i class="icon-user icons"></i>
											<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?php esc_attr_e('Username', 'pitch') ?>"/>
										</span>
										<span class="form_input_holder">
											<i class="icon-lock icons"></i>
											<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?php esc_attr_e('Password', 'pitch') ?>" />
										</span>
									<p class="submit">
										<input type="submit" name="wp-submit" id="wp-submit" class="button-primary qbutton" value="<?php esc_attr_e('Log in', 'pitch') ?>" tabindex="100" />
										<input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url( '/' )); ?>/wp-admin/" />
										<input type="hidden" name="testcookie" value="1" />
									</p>
									<p class="forgetmenot">
										<label>
											<input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" />
											<?php esc_html_e('Remember me', 'pitch') ?>
										</label>
									</p>
								</form>
							</div>
						</div>
						<?php pitch_qode_wp_link_pages(); ?>
						<?php
						if($enable_page_comments){
							?>
							<div class="container">
								<div class="container_inner">
									<?php
									comments_template('', true);
									?>
								</div>
							</div>
							<?php
						}
						?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php elseif($pitch_sidebar == "1" || $pitch_sidebar == "2"): ?>

			<?php if($pitch_sidebar == "1") : ?>
			<div class="two_columns_66_33 clearfix grid2">
				<div class="column1 content_left_from_sidebar">
					<?php elseif($pitch_sidebar == "2") : ?>
					<div class="two_columns_75_25 clearfix grid2">
						<div class="column1 content_left_from_sidebar">
							<?php endif; ?>
							<?php if (have_posts()) :
								while (have_posts()) : the_post(); ?>
									<div class="column_inner">
										<div class="login_title_holder">
											<h2 class="login_title"><?php esc_html_e("Log in to your account","pitch"); ?></h2>
										</div>
										<div class="login_subtitle_holder">
											<h5 class="login_subtitle"><?php esc_html_e("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat","pitch"); ?></h5>
										</div>
										<?php the_content(); ?>
										<div class="loginform_holder">
											<div class="loginform_holder_inner">
												<form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ) ?>" method="post">
												<span class="form_input_holder">
													<i class="icon-user icons"></i>
													<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?php esc_attr_e('Username', 'pitch') ?>"/>
												</span>
												<span class="form_input_holder">
													<i class="icon-lock icons"></i>
													<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?php esc_attr_e('Password', 'pitch') ?>" />
												</span>
													<p class="submit">
														<input type="submit" name="wp-submit" id="wp-submit" class="button-primary qbutton" value="<?php esc_attr_e('Log in', 'pitch') ?>" tabindex="100" />
														<input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url( '/' )); ?>/wp-admin/" />
														<input type="hidden" name="testcookie" value="1" />
													</p>
													<p class="forgetmenot">
														<label>
															<input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" />
															<?php esc_html_e('Remember me', 'pitch') ?>
														</label>
													</p>
												</form>
											</div>
										</div>
										<?php pitch_qode_wp_link_pages(); ?>
										<?php
										if($enable_page_comments){
											?>
											<div class="container">
												<div class="container_inner">
													<?php
													comments_template('', true);
													?>
												</div>
											</div>
											<?php
										}
										?>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>


						</div>
						<div class="column2"><?php get_sidebar();?></div>
					</div>
					<?php elseif($pitch_sidebar == "3" || $pitch_sidebar == "4"): ?>
					<?php if($pitch_sidebar == "3") : ?>
					<div class="two_columns_33_66 clearfix grid2">
						<div class="column1"><?php get_sidebar();?></div>
						<div class="column2 content_right_from_sidebar">
							<?php elseif($pitch_sidebar == "4") : ?>
							<div class="two_columns_25_75 clearfix grid2">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
									<?php endif; ?>
									<?php if (have_posts()) :
										while (have_posts()) : the_post(); ?>
											<div class="column_inner">
												<div class="login_title_holder">
													<h2 class="login_title"><?php esc_html_e("Log in to your account","pitch"); ?></h2>
												</div>
												<div class="login_subtitle_holder">
													<h5 class="login_subtitle"><?php esc_html_e("Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat","pitch"); ?></h5>
												</div>
												<?php the_content(); ?>
												<div class="loginform_holder">
													<div class="loginform_holder_inner">
														<form name="loginform" id="loginform" action="<?php echo site_url( '/wp-login.php' ) ?>" method="post">
															<span class="form_input_holder">
																<i class="icon-user icons"></i>
																<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?php esc_attr_e('Username', 'pitch') ?>"/>
															</span>
															<span class="form_input_holder">
																<i class="icon-lock icons"></i>
																<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?php esc_attr_e('Password', 'pitch') ?>" />
															</span>
															<p class="submit">
																<input type="submit" name="wp-submit" id="wp-submit" class="button-primary qbutton" value="<?php esc_attr_e('Log in', 'pitch') ?>" tabindex="100" />
																<input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url( '/' )); ?>/wp-admin/" />
																<input type="hidden" name="testcookie" value="1" />
															</p>
															<p class="forgetmenot">
																<label>
																	<input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" />
																	<?php esc_html_e('Remember me', 'pitch') ?>
																</label>
															</p>
														</form>
													</div>
												</div>
												<?php pitch_qode_wp_link_pages(); ?>
												<?php
												if($enable_page_comments){
													?>
													<div class="container">
														<div class="container_inner">
															<?php
															comments_template('', true);
															?>
														</div>
													</div>
													<?php
												}
												?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>


								</div>

							</div>
							<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
<?php get_footer(); ?>
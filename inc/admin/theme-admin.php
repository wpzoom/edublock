<?php
/**
 * Theme admin functions.
 *
 * @package EduBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Add admin menu
*
* @since 1.0.0
*/
function edublock_theme_admin_menu() {
	add_theme_page(
		esc_html__( 'EduBlock Getting Started', 'edublock' ),
		esc_html__( 'EduBlock Theme', 'edublock' ),
		'manage_options',
		'edublock-theme',
		'edublock_admin_page_content',
		30
	);
}
add_action( 'admin_menu', 'edublock_theme_admin_menu' );


/**
* Add admin page content
*
* @since 1.0.0
*/
function edublock_admin_page_content() {
	$theme = wp_get_theme();
	$theme_name = 'EduBlock';
	$active_theme_name = $theme->get('Name');

	?>

		<div class="edublock-page-header">
			<div class="edublock-page-header__container">
				<div class="edublock-page-header__branding">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/edublock.png' ); ?>" class="edublock-page-header__logo" alt="<?php echo esc_attr__( 'edublock', 'edublock' ); ?>" />
				</div>
				<div class="edublock-page-header__tagline">
					<span  class="edublock-page-header__tagline-text">
						<?php echo esc_html__( 'Designed by ', 'edublock' ); ?>
						<a href="https://www.wpzoom.com/"><?php echo esc_html__( 'WPZOOM', 'edublock' ); ?></a>
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap edublock-container">
			<div class="edublock-grid">

				<div class="edublock-grid-content">
					<div class="edublock-body">

                        <a href="https://www.wpzoom.com/" target="_blank"><img class="center theme_screenshot" src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php echo esc_attr__( 'edublock', 'edublock' ); ?>" /></a>

						<h1 class="edublock-title"><?php esc_html_e( 'Getting Started', 'edublock' ); ?></h1>
						<p class="edublock-intro-text">
							<?php echo esc_html__( 'EduBlock is a next-generation WordPress theme that adopts the Full Site Editing concept. Using the new Theme Editor, you have complete control over the design of your website. You can now change not just the colors and fonts in your theme but also make changes to the layout and global sections like the header and footer.', 'edublock' ); ?>
						</p>
						<p class="edublock-intro-text">
                            <a href="https://www.wpzoom.com/documentation/edublock/" target="_blank"><?php echo esc_html__( 'EduBlock Documentation', 'edublock' ); ?></a> &nbsp;&nbsp; <strong><a href="https://www.wpzoom.com/themes/edublock-pro/" target="_blank"><?php echo esc_html__( 'EduBlock PRO', 'edublock' ); ?></a></strong>

						</p>
						<br><br><hr>
						<br><br>

                         <a href="https://www.wpzoom.com/themes/edublock-pro/" target="_blank"><img class="center theme_screenshot" src="<?php echo esc_url( get_template_directory_uri() . '/assets/admin/img/pro.png' ); ?>" alt="<?php echo esc_attr__( 'EduBlock', 'edublock' ); ?>" /></a>

                        <h1 class="edublock-title"><?php esc_html_e( 'EduBlock PRO Now Available!', 'edublock' ); ?></h1>

                        <h2><?php esc_html_e( 'Get Access to More Patterns, Header & Footer Layouts with the PRO Version!', 'edublock' ); ?></h2>
                        <p class="edublock-intro-text">
                            <?php echo __( 'EduBlock PRO comes packaged with numerous features to help you build beautiful websites in seconds. Get access to <strong>premium block patterns</strong>, <strong>header & footer layouts</strong>, and a <strong>1-click demo content importer</strong> to help you get started quickly.', 'edublock' ); ?>
                        </p>

                        <p><a href="https://www.wpzoom.com/themes/edublock-pro/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Get EduBlock PRO &rarr;', 'edublock' ); ?></a></p>


					</div> <!-- .body -->

				</div> <!-- .content -->
				
				<!-- Sidebar -->
				<aside class="edublock-grid-sidebar">
					<div class="edublock-grid-sidebar-widget-area">

                        <div class="edublock-widget">
                            <h2 class="edublock-widget-title"><?php echo esc_html__( 'Get EduBlock PRO!', 'edublock' ); ?></h2>
                            <p><?php echo esc_html__( 'We\'ve released EduBlock PRO, an advanced version of the EduBlock theme. The PRO version includes additional patterns, header & footer layouts, and more.', 'edublock' ); ?></p>
                            <a href="https://www.wpzoom.com/themes/edublock-pro/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Get the PRO Version &rarr;', 'edublock' ); ?></a>
                        </div>


						<div class="edublock-widget">
							<h2 class="edublock-widget-title"><?php echo esc_html__( 'Useful Links', 'edublock' ); ?></h2>

							<ul class="edublock-useful-links">
                                <li>
                                    <strong><a href="https://www.wpzoom.com/themes/edublock-pro/" target="_blank"><?php echo esc_html__( 'EduBlock PRO', 'edublock' ); ?></a> - <em>NEW</em></strong>
                                </li>
								<li>
									<a href="https://www.wpzoom.com/documentation/edublock/" target="_blank"><?php echo esc_html__( 'EduBlock Documentation', 'edublock' ); ?></a>
								</li>
								<li>
									<a href="https://wordpress.org/support/theme/edublock/" target="_blank"><?php echo esc_html__( 'Support', 'edublock' ); ?></a>
								</li>
								<li>
									<a href="https://www.wpzoom.com/themes/" target="_blank"><?php echo esc_html__( 'View our Premium Themes', 'edublock' ); ?></a>
								</li>
                                <li>
                                    <a href="https://www.wpzoom.com/plugins/" target="_blank"><?php echo esc_html__( 'View our Premium Plugins', 'edublock' ); ?></a>
                                </li>
							</ul>
						</div>

						<div class="edublock-widget">
							<h2 class="edublock-widget-title"><?php echo esc_html__( 'Leave us a review', 'edublock' ); ?></h2>
							<p><?php echo esc_html__( 'Are you are enjoying EduBlock? We would love to hear your feedback.', 'edublock' ); ?></p>
							<a href="https://wordpress.org/support/theme/edublock/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Submit a review', 'edublock' ); ?></a>
						</div>

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php
}

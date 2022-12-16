<?php
/**
 * Title: Sidebar
 * Slug: edublock/sidebar
 * Categories: edublock-general
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color"><strong>SHARE</strong></p>
<!-- /wp:paragraph -->

<!-- wp:outermost/social-sharing {"iconColor":"tertiary","iconColorValue":"#6C6C77","className":"is-style-logos-only","style":{"spacing":{"blockGap":"14px"}}} -->
<ul class="wp-block-outermost-social-sharing has-icon-color is-style-logos-only"><!-- wp:outermost/social-sharing-link {"service":"facebook"} /-->

<!-- wp:outermost/social-sharing-link {"service":"twitter"} /-->

<!-- wp:outermost/social-sharing-link {"service":"linkedin"} /-->

<!-- wp:outermost/social-sharing-link {"service":"whatsapp"} /-->

<!-- wp:outermost/social-sharing-link {"service":"mail"} /--></ul>
<!-- /wp:outermost/social-sharing --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"314px"} -->
<div style="height:314px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Latest news</h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"lightgrey","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-lightgrey-color has-alpha-channel-opacity has-lightgrey-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:latest-posts /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2>Tags</h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"lightgrey","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-lightgrey-color has-alpha-channel-opacity has-lightgrey-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->
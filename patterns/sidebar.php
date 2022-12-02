<?php
/**
 * Title: Sidebar
 * Slug: edublock/sidebar
 * Categories: edublock-general
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Subscribe</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sign up with your email address to receive our weekly news</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form action="/action_page.php">
    <input type="text" placeholder="Name" name="name" required="">
    <input type="text" placeholder="Email address" name="mail" required="">
    <input type="submit" value="Subscribe">
</form>
<!-- /wp:html -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d7845"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d7845;color:#6d6d7845"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Latest news</h2>
<!-- /wp:heading -->

<!-- wp:latest-posts /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Categories</h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true} /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Search</h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Enter your keywords","buttonText":"Search"} /-->

<!-- wp:separator {"style":{"color":{"background":"#6d6d784f"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d784f;color:#6d6d784f"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
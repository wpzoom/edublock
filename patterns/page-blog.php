<?php
/**
 * Title: Blog page with sidebar
 * Slug: edublock/page-blog
 * Categories: edublock-query
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0"}}},"className":"site-content","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull site-content" style="margin-top:0"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-49.png","id":5614,"dimRatio":60,"overlayColor":"secondary","align":"full"} -->
<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-5614" alt="" src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/'; ?>Rectangle-49.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-default","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group is-style-default"><!-- wp:spacer {"height":"88px"} -->
<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"textColor":"white","fontSize":"max-48"} -->
<h1 class="has-white-color has-text-color has-max-48-font-size">Our News</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Latest announcement, articles, and more!</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"63px"} -->
<div style="height:63px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"64px"} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"40px"}}},"className":"site-content"} -->
<main class="wp-block-group site-content" style="margin-top:0;padding-top:0px;padding-bottom:40px"><!-- wp:query {"queryId":4,"query":{"perPage":"3","pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"400px","style":{"border":{"radius":"20px","width":"0px","style":"none"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|40","right":"0"}}},"textColor":"tertiary","fontSize":"large"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more /-->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"style":{"color":{"background":"#6d6d7821"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#6d6d7821;color:#6d6d7821"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"},"fontSize":"medium"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"default"}} -->
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
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
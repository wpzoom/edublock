<?php
/**
 * Title: List of posts in one column.
 * Slug: edublock/query-default
 * Categories: edublock-query
 * Viewport Width: 1280
 */
?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":3},"displayLayout":{"type":"list"},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"400px","style":{"border":{"radius":"20px","width":"0px","style":"none"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"20px","top":"15px"}}},"textColor":"tertiary","fontSize":"large"} /-->

<!-- wp:post-date {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"20px"}}}} /-->

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

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->

<!-- wp:query-pagination-numbers {"fontSize":"medium"} /-->

<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
<?php
/**
 * Title: Recent News
 * Slug: hairsaloon/recent-news
 * Categories: hairsaloon, recent-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"3px","textTransform":"uppercase","lineHeight":"1"},"spacing":{"padding":{"top":"15px","bottom":"10px","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary","textColor":"white","fontSize":"small"} -->
<h4 class="wp-block-heading has-text-align-center has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="padding-top:15px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50);font-style:normal;font-weight:600;letter-spacing:3px;line-height:1;text-transform:uppercase"><?php esc_html_e('From The Blog','hairsaloon'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"10px"}}},"textColor":"secondary","fontSize":"section-title"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-section-title-font-size" style="margin-top:10px;font-style:normal;font-weight:700"><?php esc_html_e('Standard Blog Post With Latest News','hairsaloon'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"15px"} -->
<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"15px","bottom":"15px","left":"10px","right":"10px"}}},"className":"has-shadow","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-shadow" style="margin-top:0;margin-bottom:0;padding-top:15px;padding-right:10px;padding-bottom:15px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"spacing":{"margin":{"top":"15px","bottom":"0px","right":"0px","left":"0px"},"padding":{"right":"15px","left":"15px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
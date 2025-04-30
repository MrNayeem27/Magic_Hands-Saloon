<?php
/**
 * Title: Banner
 * Slug: hairsaloon/banner
 * Categories: hairsaloon, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>","id":223,"dimRatio":60,"overlayColor":"black","focalPoint":{"x":0.63,"y":0.5},"minHeight":98,"minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0px;margin-bottom:0px;min-height:98vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-223" alt="" src="<?php echo esc_url( get_template_directory_uri().'/assets/img/banner.jpg' ); ?>" style="object-position:63% 50%" data-object-fit="cover" data-object-position="63% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"3px","textTransform":"capitalize"},"spacing":{"padding":{"top":"8px","right":"20px","bottom":"8px","left":"20px"}}},"backgroundColor":"primary","textColor":"white","className":"slide-sub-title","fontSize":"small"} -->
<h4 class="wp-block-heading has-text-align-center slide-sub-title has-white-color has-primary-background-color has-text-color has-background has-small-font-size" style="padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-style:normal;font-weight:500;letter-spacing:3px;text-transform:capitalize"><?php esc_html_e('Welcome To Hair Salon','hairsaloon'); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"right","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"spacing":{"margin":{"top":"25px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"banner-title"} -->
<h2 class="wp-block-heading has-text-align-right has-banner-title-font-size" style="margin-top:25px;margin-right:0px;margin-bottom:0px;margin-left:0px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e('Refresh Your Style And Renew Your Looks','hairsaloon'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php esc_html_e('This is the place where we help you to find your own unique identity. Humour is powerful. It drives emotion. And we tend to remember things that we associate with an emotion better. Always fulfilling your expectations.','hairsaloon'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","letterSpacing":"0.22em","fontSize":"14px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"40px","right":"40px"}},"border":{"radius":"0px"}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:14px;font-style:normal;font-weight:500;letter-spacing:0.22em;text-transform:uppercase"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:0px;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px"><?php esc_html_e('See How We Do It','hairsaloon'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
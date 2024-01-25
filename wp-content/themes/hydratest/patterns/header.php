<?php
/**
 * Title: Header
 * Slug: hydratest/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:20px;padding-bottom:20px">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"isStackedOnMobile":false,"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
        <div class="wp-block-columns is-not-stacked-on-mobile">
            
        <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:site-logo {"width":60,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
                    <!-- wp:site-title {"level":0} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
    
            <!-- wp:column {"width":"80%","className":"flex-center lg-w-50"} -->
            <div class="wp-block-column flex-center lg-w-50" style="flex-basis:80%">
                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
                <div class="wp-block-group">
                
                    <!-- wp:navigation {"ref":4,"icon":"menu","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
                
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
            
            <!-- wp:column {"width":"30%","className":"flex-center,lg-visible"} -->
            <div class="wp-block-column flex-center lg-visible" style="flex-basis:30%">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
                    <div class="wp-block-buttons">

                        <!-- wp:button {"style":{"border":{"radius":"100px","width":"2px"},"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-outline","fontSize":"small"} -->
                        <div class="wp-block-button has-custom-width has-custom-font-size is-style-outline has-small-font-size">
                            <a class="wp-block-button__link wp-element-button" style="border-width:2px;border-radius:100px">CONTACT US</a>
                        </div>
                        <!-- /wp:button -->

                        <!-- wp:button {"gradient":"gradient-1","style":{"border":{"width":"0px","style":"none","radius":"100px"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
                        <div class="wp-block-button has-custom-width has-custom-font-size has-small-font-size">
                            <a class="wp-block-button__link has-gradient-1-gradient-background has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:100px">JOIN HYDRA</a>
                        </div>
                        <!-- /wp:button -->

                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
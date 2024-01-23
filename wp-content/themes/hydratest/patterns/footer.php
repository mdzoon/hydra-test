<?php
/**
 * Title: Footer with colophon, 4 columns
 * Slug: hydratest/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0">

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"top","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">		
				<!-- wp:site-logo {"width":20,"shouldSyncIcon":true,"className":"is-style-default","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /-->
			</div>
			<!-- /wp:group -->				
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"6px","className":"md-visible"} -->
		<div class="wp-block-column md-visible" style="flex-basis:6px">
			<!-- wp:spacer {"height":"150px","style":{"color":{"gradient":"linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%)"}}} -->
			<div style="background:linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%);height:150px;" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->			
		</div>
		<!-- /wp:column -->		

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"top","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'About', 'hydratest' ); ?>"} -->

						<!-- wp:navigation-link {"label":"ABOUT","url":"#"} /-->
						<!-- wp:navigation-link {"label":"SERVICES","url":"#"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"6px","className":"md-visible"} -->
		<div class="wp-block-column md-visible" style="flex-basis:6px">
			<!-- wp:spacer {"height":"150px","style":{"color":{"gradient":"linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%)"}}} -->
			<div style="background:linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%);height:150px;" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->			
		</div>
		<!-- /wp:column -->			

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"top","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Privacy', 'hydratest' ); ?>"} -->

						<!-- wp:navigation-link {"label":"F.A.Q.","url":"#"} /-->
						<!-- wp:navigation-link {"label":"SITEMAP","url":"#"} /-->
						<!-- wp:navigation-link {"label":"CONDITIONS","url":"#"} /-->

						<!-- /wp:navigation -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->		

		<!-- wp:column {"width":"6px","className":"md-visible"} -->
		<div class="wp-block-column md-visible" style="flex-basis:6px">
			<!-- wp:spacer {"height":"150px","style":{"color":{"gradient":"linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%)"}}} -->
			<div style="background:linear-gradient(0deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%);height:150px;" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->			
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left","verticalAlignment":"top","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"700"}}} -->
						<h4 class="wp-block-heading" style="font-weight:700;"><?php esc_html_e( 'SOCIALISE WITH HYDRA', 'hydratest' ); ?></h4>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">

						<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small","ariaLabel":"<?php esc_attr_e( 'Social Media', 'hydratest' ); ?>"} -->

							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"horizontal"}} -->
								<div class="wp-block-group">
									<!-- wp:social-links {"iconColor":"base","iconBackgroundColor":"base-2","className":"is-style-logos-only","style":{"spacing":{"blockGap":"1.2em"}}} -->
										<ul class="wp-block-social-links has-icon-color is-style-logos-only">
											<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
											<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
										</ul>
									<!-- /wp:social-links -->
								</div>
							<!-- /wp:group -->

						<!-- /wp:navigation -->

						<!-- wp:button {"gradient":"gradient-1","width":100,"style":{"border":{"width":"0px","style":"none","radius":"100px"},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
							<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-gradient-1-gradient-background has-background wp-element-button" style="border-style:none;border-width:0px;border-radius:100px">BUILD YOUR WORLD</a></div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide"} -->
	<div class="wp-block-group alignwide">
		<!-- wp:spacer {"height":"1px","style":{"color":{"gradient":"linear-gradient(90deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%)"}}} -->
			<div style="background:linear-gradient(90deg, rgba(52,48,69,1) 0%, rgba(129,118,175,1) 20%, rgba(192,183,232,1) 35%, rgba(192,183,232,1) 65%, rgba(129,118,175,1) 80%, rgba(52,48,69,1) 100%);height:1px;" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px;" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->		
		<!-- wp:paragraph {"style":"textColor":Contrast-2","fontSize":"small","typography":{"fontWeight":"700"}} -->
		<p class="has-text-align-center has-text-color has-small-font-size" style="font-weight:700;">
			<?php
				$currentDate = date('Y');
				echo sprintf( esc_html__( $currentDate . ' © HYDRA LANDING PAGE - BY ZINE. E. FALOUTI - ALL RIGHTS RESERVED' , 'hydratest' ) );
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
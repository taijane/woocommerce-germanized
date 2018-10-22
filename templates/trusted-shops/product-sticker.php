<?php
/**
 * Trusted Shops Product Sticker
 *
 * @author 		Vendidero
 * @package 	WooCommerceGermanized/Templates
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
	global $post;
	$skus = WC_germanized()->trusted_shops->get_product_skus( $post->ID );
?>

<div id="ts_product_sticker"></div>

<script type="text/javascript">
	<?php echo WC_germanized()->trusted_shops->get_product_sticker_code( true, array( 'sku' => $skus ) ); ?>
</script>
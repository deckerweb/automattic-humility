<?php # -*- coding: utf-8 -*-
/**
 * Main plugin file.
 * @package           Automattic Humility
 * @author            David Decker
 * @copyright         Copyright (c) 2019, David Decker - DECKERWEB
 * @license           GPL-2.0-or-later
 * @link              https://deckerweb.de/twitter
 *
 * @wordpress-plugin
 * Plugin Name:       Automattic Humility
 * Plugin URI:        https://github.com/deckerweb/automattic-humility
 * Description:       Humble yourself in the GDPR, Automattic! Only ever track people who explicitely opted in. Spare us your advertisements. -- We look at you, Automattic. We are the WordPress people - we have power, we stand up, we raise our voices.
 * Version:           1.0.0
 * Author:            David Decker - DECKERWEB
 * Author URI:        https://deckerweb-plugins.com/
 * License:           GPL-2.0-or-later
 * License URI:       https://opensource.org/licenses/GPL-2.0
 * Text Domain:       automattic-humility
 * Domain Path:       /languages/
 * Requires WP:       4.7
 * Requires PHP:      5.6
 * GitHub Plugin URI: https://github.com/deckerweb/automattic-humility
 * GitHub Branch:     master
 *
 * Copyright (c) 2019 David Decker - DECKERWEB
 */

/**
 * Exit if called directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Sorry, you are not allowed to access this file directly.' );
}


/**
 * 1) Jetpack, we look at you!
 * -------------------------------------------------------------------------- */

/**
 * Remove senseless Jetpack Ads from plugin installer search results as no one
 *   needs these anyway dditionally remove other promotions and Ads from Jetpack.
 *
 * @link https://wptavern.com/jetpack-7-1-adds-feature-suggestions-to-plugin-search-results#comment-284531
 *
 * @since 1.0.0
 */
add_filter( 'jetpack_show_promotions', '__return_false', 20 );


/**
 * Additionally remove other promotions and Ads from Jetpack.
 *
 * @since 1.0.0
 */
add_filter( 'can_display_jetpack_manage_notice', '__return_false', 20 );
add_filter( 'jetpack_just_in_time_msgs', '__return_false', 20 );


/**
 * 1) WooCommerce, we also look at you!
 *    We look at your driving behind the scenes, how you do it badly with
 *    customer data
 *
 * @link https://www.reddit.com/r/Wordpress/comments/b9xm1j/_/
 * -------------------------------------------------------------------------- */

/**
 * Remove WooCommerce 3.6+ Ads injections.
 *
 * @since 1.0.0
 */
add_filter( 'woocommerce_allow_marketplace_suggestions', '__return_false' );


/**
 * Clean up the Woo tracking mess.
 *
 * @since 1.0.0
 */
if ( class_exists( 'WooCommerce' ) ) :

	if ( class_exists( 'WC_Tracker' ) ) :

		/**
		 * Nope out of Woo Tracking - Clear the tracker hook we know about.
		 *
		 * @since 1.0.0
		 */
		remove_action( 'woocommerce_tracker_send_event', array( 'WC_Tracker', 'send_tracking_data' ) );

		/**
		 * And clear the entire cron job.
		 *
		 * @since 1.0.0
		 */
		wp_clear_scheduled_hook( 'woocommerce_tracker_send_event' );

		/**
		 * Just in case, filter the Woo tracking data and just return an empty
		 *   array any time Woo tries to track anything.
		 *
		 * @since 1.0.0
		 */
		add_filter( 'woocommerce_tracker_data', '__return_empty_array', 100 );

	endif;

endif;

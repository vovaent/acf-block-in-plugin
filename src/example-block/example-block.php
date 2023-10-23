<?php
/**
 * Plugin Name:       Acf Example Block
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       example-block
 *
 * @package           acf
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function acf_example_block_block_init() {
	register_block_type( __DIR__ . '/build/block.json' );
}
add_action( 'init', 'acf_example_block_block_init' );

/**
 * Register a custom block category for our blocks.
 *
 * @link https://developer.wordpress.org/reference/hooks/block_categories_all/
 *
 * @param array $block_categories Existing block categories.
 * @return array Block categories.
 */
function acf_accordion_block_block_categories( $block_categories ) {

	$block_categories = array_merge(
		array(
			array(
				'slug'  => 'acf-blocks',
				'title' => __( 'ACF Blocks', 'acf_example_block' ),
				'icon'  => '<svg viewBox="0 0 55 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.9986 23.8816H38.0521V0.0253448H53.9034V5.58064H43.9986V9.83762H53.334V15.2547H43.9986V23.8825V23.8816Z" fill="black"/><path opacity="0.05" d="M36.4832 13.8697H42.3772C41.5051 19.9417 36.3849 23.9574 30.1814 23.9574C23.3882 23.9574 17.8572 18.8809 17.8572 12.0448C17.843 10.4551 18.1521 8.879 18.7658 7.41239C19.3795 5.94579 20.2849 4.61924 21.4271 3.51334C23.7714 1.24304 26.9182 -0.00834104 30.1814 0.0320335C36.3275 0.0320335 41.5908 4.07879 42.3392 10.0536H36.4511C34.6807 3.2856 23.649 3.94741 23.649 12.0448C23.649 20.1432 34.8189 20.7398 36.4832 13.8716V13.8697Z" fill="black"/><path d="M35.2772 13.8697C34.266 17.2858 30.667 19.317 27.1244 18.4664C23.5798 17.6128 21.3588 14.187 22.0946 10.7047C22.8294 7.22146 26.2572 4.92655 29.8582 5.50758C31.3334 5.70738 32.6937 6.41247 33.7074 7.50273C34.408 8.22394 34.9337 9.0963 35.2442 10.0526H40.96C40.2116 4.06425 34.9337 0.0320875 28.8022 0.0320875C25.5386 -0.00942939 22.391 1.24129 20.0459 3.51144C18.903 4.61761 17.997 5.94473 17.3831 7.41208C16.7693 8.87942 16.4603 10.4563 16.4751 12.0468C16.4751 18.8829 21.9739 23.9574 28.8042 23.9574C35.0028 23.9574 40.1084 19.9418 40.996 13.8697H35.2763H35.2772Z" fill="black"/><path opacity="0.05" d="M17.5146 20.4109H9.2391L7.88629 23.8776H1.55337L11.245 0H15.4689L25.5459 23.8854H18.8597L17.5127 20.4109H17.5146ZM11.5914 14.5004L11.3841 15.0396H15.4017L15.2625 14.6347L13.3919 9.51446L11.5914 14.5004Z" fill="black"/><path d="M15.9476 20.4109H7.68573L6.33389 23.8776H0L9.69257 0H13.9165L23.9935 23.8854H17.3102L15.9476 20.4109ZM10.0381 14.5004L9.83174 15.0396H13.8493L13.7092 14.6347L11.8396 9.51446L10.039 14.5004H10.0381Z" fill="black"/></svg>',
			),
		),
		$block_categories,
	);

	return $block_categories;
}
add_filter( 'block_categories_all', 'acf_accordion_block_block_categories' );

require_once plugin_dir_path( __FILE__ ) . 'includes/acf/acf-function.php';

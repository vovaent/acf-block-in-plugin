<?php
/**
 * Block Example Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 *
 * @package acf
 */

// $data is what we're going to expose to our render template
$data = array(
	'example_field' => get_field( 'text' ),
);

// Dynamic block ID.
$block_id = 'example-' . $block['id'];

// Check if a custom ID is set in the block editor.
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Block classes.
$class_name = 'wp-block-acf-example-block';
if ( ! empty( $block['class_name'] ) ) {
	$class_name .= ' ' . $block['class_name'];
}
?>

<!-- Our front-end template -->
<div id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $data['example_field'] ) {
		echo wp_kses_post( '<p>' . $data['example_field'] . '</p>' );
	}
	?>
</div>

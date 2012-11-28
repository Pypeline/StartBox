<?php

/**
 * Text Input
 *
 * @since  2.7
 * @param  array $args The array of arguments for building this input
 * @return string      The concatenated text option output
 */
class SB_Textarea extends SB_Input {

	/**
	 * Textarea Input
	 *
	 * @param  array $args  The array of arguments for building this input
	 * @return string       The concatenated textarea option output
	 */
	public function settings_field( $args = '' ) {

		// Concatenate our output
		$output = '';
		$output .= $this->html_label();
		$output .= '<textarea name="' . $this->name . '" id="' . $this->id . '">' . esc_textarea( $this->value ) . '</textarea>'."\n";
		$output .= $this->html_description();

		// Return our output
		return $output;
	}

	public function metabox_field( $args = '' ) {

	}

	public function customizer_field( $args = '' ) {

	}

}
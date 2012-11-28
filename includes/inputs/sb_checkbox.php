<?php

/**
 * Checkbox Input
 *
 * @since  2.7
 * @param  array $args The array of arguments for building this input
 * @return string      The concatenated text option output
 */
class SB_Checkbox extends SB_Input {

	/**
	 * Textarea Input
	 *
	 * @param  array $args  The array of arguments for building this input
	 * @return string       The concatenated textarea option output
	 */
	public function settings_field( $args = '' ) {

		// Concatenate our output
		$output .= $before ;
		$output .= '<label for="' . $this->name . '" class="' . esc_attr( $this->align ) . '"><input type="checkbox" class="checkbox" id="' . $this->id . '" name="' . $this->name . '" value="true" ' . checked( $this->value, 'true', false ) . ' /> ' . $this->label . '</label>'."\n";
		$output .= $this->html_description();
		$output .= $after;

		// Return our output
		return $output;
	}

	public function metabox_field( $args = '' ) {

	}

	public function customizer_field( $args = '' ) {

	}

}
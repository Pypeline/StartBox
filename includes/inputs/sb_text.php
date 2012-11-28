<?php

/**
 * Text Input
 *
 * @since  2.7
 * @param  array $args The array of arguments for building this input
 * @return string      The concatenated text option output
 */
class SB_Text extends SB_Input {

	public function settings_field() {

		// Concatenate our output
		$output = '';
		$output .= '<p class="' . esc_attr( $args['id'] ) . '">';
		$output .= $this->html_label();
		$output .= '<span class="' .esc_attr( $align ) . '">';
		$output .= $this->before;
		$output .= '<input type="text" value="' . esc_attr( $this->value ) . '" name="' . $this->name . '" id="' . $this->id . '" class="' . esc_attr( 'option-field-' . esc_attr( $this->size . ' ' . $this->class ) ) . '" />';
		$output .= $this->after;
		$output .= '</span>';
		$output .= $this->html_description();
		$output .= '</p>'."\n";

		// Return our output
		return $output;
	}

	public function metabox_field( $args = '' ) {

	}

	public function customizer_field( $args = '' ) {

	}

}
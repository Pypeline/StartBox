<?php

/**
 * Input Base Class
 *
 * @since  2.7
 * @param  array $args The array of arguments for building this input
 * @return string      The concatenated text option output
 */
class SB_Input {

	// Setup our variables
	public $section     = '';        // The section name where this option will appear
	public $name        = '';        // Unique name for theme option
	public $id          = '';        // Optional custom ID for input and container
	public $class       = '';        // Optional custom class(es) for input container
	public $label       = '';        // Text to use as the input's label
	public $value       = '';        // The input's current value
	public $default     = '';        // The input's default value
	public $description = '';        // Optional text to use as the input's description
	public $size        = 'default'; // Optional size of the input (small, default, large; default: default)
	public $align       = 'left';    // Optional alignment of the input (left, right; default: left)

	/**
	 * Registers the input field with Settings API
	 */
	public function register() {
		add_settings_field(
			$this->option_name,
			$this->label,
			array( &$this, 'settings_field' ),
			$this->parent,
			$this->section );
	}

	/**
	 * Registers the input field within Theme Customizer
	 */
	public function register_customizer( $wp_customize, $priority ) {

		$wp_customize->add_setting( $this->option_name, array(
			'default'        => $this->default,
			'type'           => 'option',
			'capability'     => 'edit_theme_options',
		) );

		$this->add_customizer_control( $wp_customize, $this->option_name, $priority );

		// If this option has a JavaScript preview_function, we want to set the transport to
		// 'postMessage' (real-time previewing) and then call the preview_function when the option is changed.
		if ( $this->preview_function() ) {
			$wp_customize->get_setting( $this->option_name )->transport = 'postMessage';
			add_action( 'struts_preview_javascript', array( &$this, 'customizer_preview' ) );
		}
	}

	protected function add_customizer_control( $wp_customize, $setting_name, $priority ) {
		$wp_customize->add_control( $this->option_name, $this->customizer_control_options( $setting_name, $priority ) );
	}

	protected function customizer_control_options( $setting_name, $priority = 1000 ) {
		return array(
			'label' => strip_tags( $this->label ),
			'section' => $this->section,
			'settings' => $setting_name,
			'priority' => $priority
		);
	}

	/**
	 * Prints some JavaScript that runs preview_function within Theme Customizer, passing the "to" variable as a parameter.
	 */
	public function customizer_preview() { ?>
			wp.customize('<?php echo esc_js( $this->option_name ); ?>',function( value ) {
				value.bind(function(to) {
					<?php echo $this->preview_function(); ?>(to);
				});
			});
		<?php
	}

	/**
	 * Helper function for outputting an option's label
	 */
	public function html_label() {
		$output .= '<label for="' . $this->option_name . '">' . $this->label . ':</label> ';
		return $output;
	}

	/**
	 * Helper function for outputting an option's descriptive text
	 */
	public function html_description() {
		return '<p class="description"> ' . $this->description . ' </p>'."\n";
	}

	public function html_input() {}
	public function settings_field() {}
	public function metabox_field() {}
	public function customizer_field() {}

}
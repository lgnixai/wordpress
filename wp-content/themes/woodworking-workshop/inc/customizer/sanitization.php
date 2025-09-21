<?php
/**
 * Customizer: Sanitization Callbacks
 *
 * This file demonstrates how to define sanitization callback functions for various data types.
 * 
 * @package   Woodworking Workshop
 * @copyright Copyright (c) 2015, WordPress Theme Review Team
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 */

function woodworking_workshop_sanitize_checkbox( $woodworking_workshop_checked ) {
	return ( ( isset( $woodworking_workshop_checked ) && true == $woodworking_workshop_checked ) ? true : false );
}

/* Sanitization Text*/
function woodworking_workshop_sanitize_text( $woodworking_workshop_text ) {
	return wp_filter_post_kses( $woodworking_workshop_text );
}

function woodworking_workshop_sanitize_choices( $woodworking_workshop_input, $woodworking_workshop_setting ) {
    global $wp_customize; 
    $woodworking_workshop_control = $wp_customize->get_control( $woodworking_workshop_setting->id ); 
    if ( array_key_exists( $woodworking_workshop_input, $woodworking_workshop_control->choices ) ) {
        return $woodworking_workshop_input;
    } else {
        return $woodworking_workshop_setting->default;
    }
}

function woodworking_workshop_sanitize_phone_number( $woodworking_workshop_phone ) {
    return preg_replace( '/[^\d+]/', '', $woodworking_workshop_phone );
}

function woodworking_workshop_sanitize_copyright_position( $woodworking_workshop_input ) {
    $woodworking_workshop_valid = array( 'right', 'left', 'center' );

    if ( in_array( $woodworking_workshop_input, $woodworking_workshop_valid, true ) ) {
        return $woodworking_workshop_input;
    } else {
        return 'right';
    }
}

// Sanitization callback function for logo width
function woodworking_workshop_sanitize_logo_width($woodworking_workshop_input) {
    $woodworking_workshop_input = absint($woodworking_workshop_input); // Convert to integer
    // Ensure the value is between 1 and 150
    return ($woodworking_workshop_input >= 1 && $woodworking_workshop_input <= 300) ? $woodworking_workshop_input : 150; // Default to 270 if out of range
}
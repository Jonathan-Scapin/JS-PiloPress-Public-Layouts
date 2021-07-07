<?php
// Section
$layout_path = basename( __FILE__ );
$layout_name = pathinfo( $layout_path, PATHINFO_FILENAME );
$field_group = PIP_Layouts_Single::get_layout_field_group_by_slug( $layout_name );
$layout_vars = acf_maybe_get( $field_group, 'pip_layout_var' );
$css_vars    = array();
if ( $layout_vars ) {
    foreach ( $layout_vars as $layout_var ) {
        $css_vars[ acf_maybe_get( $layout_var, 'pip_layout_var_key' ) ] = acf_maybe_get( $layout_var, 'pip_layout_var_value' );
    }
}

// CSS Vars


// Fields
$objet               = get_sub_field( 'objet' );
$societe             = get_sub_field( 'societe' );
$nom                 = get_sub_field( 'nom' );
$prenom              = get_sub_field( 'prenom' );
$email               = get_sub_field( 'email' );
$telephone           = get_sub_field( 'telephone' );
$votre_message       = get_sub_field( 'votre_message' );
$opt_in              = get_sub_field( 'opt-in' );
$captcha             = get_sub_field( 'captcha' );

// Configuration



?>

<?php


$args = array(
    // Whether the title should be displayed or not (true/false)
    'display_title' => false,
    
    // Whether the description should be displayed or not (true/false)
    'display_description' => false,
    
    // Text used for the submit button
    'submit_text' => 'Submit',
    
    // The URL to which the form points. Defaults to the current URL which will automatically display a success message after submission
    // If this is overriden you may use af_has_submission to check for a form submission
    'target' => CURRENT_URL,
    
    // Whether the form output should be echoed or returned	
    'echo' => true,
    
    // Field values to pre-fill. Should be an array with format: $field_name_or_key => $field_prefill_value
    'values' => array(),
    
    // Array of field keys or names to exclude from form rendering
    'exclude_fields' => array(),
    
    // Either 'wp' or 'basic'. Whether to use the Wordpress media uploader or a regular file input for file/image fields.
    'uploader' => 'wp',
    
    // The URL to redirect to after a successful submission. Defaults to false for no redirection.
    'redirect' => false,
);

advanced_form( 'form_key', $args ); ?>	
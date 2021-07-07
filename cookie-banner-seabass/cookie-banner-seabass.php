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
$title               = get_sub_field( 'title' );
$content             = get_sub_field( 'content' );
$consent_mode        = get_sub_field( 'consent_mode' );
$button_agree        = get_sub_field( 'button_agree' );
$button_disagree     = get_sub_field( 'button_disagree' );

// Configuration
$banner_position     = get_sub_field( 'banner_position' );
$banner_location     = get_sub_field( 'banner_location' );
$display_mode        = get_sub_field( 'display_mode' );
$image               = get_sub_field( 'image' );



?>

    <div class="<?php echo $banner_position . ' ' . $banner_location ;?> w-full bg-gray-300 z-50">
        <div class="wrapper flex flex-col sm:flex-row items-center">
            <div class="icon w-10 mx-2">
                <img
                    class="cookieImg"
                    src="<?php echo acf_maybe_get( $image, 'url' ); ?>"
                    alt="<?php echo acf_maybe_get( $image, 'alt' ); ?>">
            </div>
            <div class="wrapperContent sm:w-4/12 md:w-10/12 h-20 overflow-auto">
                <div class="cookieTitle"><?php echo $title ;?></div>
                <div class="cookieContent"><?php echo $content ;?></div>
            </div>
                <?php if ( $consent_mode == true ) : ?>
                    <div class="content-wrapper flex justify-center w-2/12 ml-1">
                        <div><?php echo $button_agree ; ?></div>
                        <div><?php echo $button_disagree ; ?></div>
                    </div>
                <?php endif; ?>
        </div>
    </div>    

<?php

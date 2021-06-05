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
$content_wrapper_vars = acf_maybe_get( $css_vars, 'content-wrapper' );
$bg_color_contain_vars = acf_maybe_get( $css_vars, 'bg_color_contain' );
$bg_color_progress_vars = acf_maybe_get( $css_vars, 'bg_color_progress' );

// Fields
$content = get_sub_field( 'content' );

// Configuration
$bar_height   = get_sub_field( 'bar_height' );
$empty_bar_color   = get_sub_field( 'empty_bar_color' );
$progress_bar_color   = get_sub_field( 'progress_bar_color' );

// Content width
$content_width = '';

// Container width
foreach ( $container_width as $screen => $nb_items ) {

    if ( $advanced_mode ) {
        if ( !strstr( $screen, '_advanced' ) ) {
            continue;
        }
    } else {
        if ( strstr( $screen, '_advanced' ) ) {
            continue;
        }
    }

    // Remove "_advanced" from screen sizeF
    $screen = str_replace( '_advanced', '', $screen );

    // Build responsive class
    switch ( $screen ) {

        case 'default':
            $content_width .= ' ' . $nb_items;
            break;

        default:
            $content_width .= ' ' . $screen . ':' . $nb_items;
            break;
    }
}
?>
<section class="<?php echo "$layout_name $content_wrapper_vars" ?>">

    <div class="progress-container <?php echo $bg_color_contain_vars . ' ' . $empty_bar_color; ?>" style="min-height: <?php echo $bar_height; ?>">
        <div class="progress-bar <?php echo $bg_color_progress_vars . ' ' . $progress_bar_color; ?>" style="min-height: <?php echo $bar_height; ?>" id="progressBar"></div>
    </div>

</section>
<?php

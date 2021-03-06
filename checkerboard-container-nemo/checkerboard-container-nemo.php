<?php

// CSS Vars
$layout_name = basename( dirname( __FILE__ ) );

$field_group = PIP_Layouts_Single::get_layout_field_group_by_slug( $layout_name );
$layout_vars = acf_maybe_get( $field_group, 'pip_layout_var' );
$css_vars    = array();
if ( $layout_vars ) {
    foreach ( $layout_vars as $layout_var ) {
        $css_vars[ acf_maybe_get( $layout_var, 'pip_layout_var_key' ) ] = acf_maybe_get( $layout_var, 'pip_layout_var_value' );
    }
}

$wrapper_vars               = acf_maybe_get( $css_vars, 'main-wrapper' );
$image_vars                 = acf_maybe_get( $css_vars, 'image' );
$wrapper_content_vars       = acf_maybe_get( $css_vars, 'wrapper-content' );
$inner_wrapper_content_vars = acf_maybe_get( $css_vars, 'inner-wrapper-content' );

// Fields
$img_left = get_sub_field( 'img_left' );
$content  = get_sub_field( 'content' );
$image    = get_sub_field( 'img' );

// Configuration
$advanced_mode   = get_sub_field( 'advanced_mode' );
$container_width = get_sub_field( 'container_width' );
$placement       = get_sub_field( 'placement' );

// Content width
$content_width = '';

// If has container width
if ( $container_width ) {
    // Browse container widths
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

        // Remove "_advanced" from screen size
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
}

?>
    <section class="<?php echo $layout_name; ?>">

        <div class="container mx-auto">
        
            <div class="mx-auto main-wrapper <?php echo $wrapper_vars . ' ' . $content_width; ?>">

                <?php if ( $image ) : ?>
                    <img
                        class="image <?php echo $image_vars . ' ' . ( $img_left ? 'lg:order-1' : 'lg:order-2' ); ?>"
                        src="<?php echo acf_maybe_get( $image, 'url' ); ?>"
                        alt="<?php echo acf_maybe_get( $image, 'alt' ); ?>">
                <?php endif; ?>

                <div class="wrapper-content <?php echo $wrapper_content_vars . ' ' . ( $img_left ? 'lg:order-2' : 'lg:order-1' ); ?>">
                    <div class="inner-wrapper-content <?php echo $inner_wrapper_content_vars; ?>">
                        <?php echo $content; ?>
                    </div>
                </div>

            </div>
        </div>

    </section>
<?php

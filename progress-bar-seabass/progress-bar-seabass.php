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
$icon = get_sub_field( 'icon' );
$image = get_sub_field( 'image' );
$description = get_sub_field( 'description' );

// Configuration
$bar_height   = get_sub_field( 'bar_height' );

// Content width
$content_width = '';


?>
<section class="wrapper-progress-bar container mx-auto">
    <?php if ( have_rows( 'icons' ) ) : ?>
                    <?php while ( have_rows( 'icons' ) ) : ?>
                        <?php 
                        the_row(); ?>
                        <div class="wrapper-items-progress-bar flex items-center my-4">
                            <?php
                            $image = get_sub_field( 'image' ); ?>
                            <div class="wrapper-icons">
                                <img src="<?php echo acf_maybe_get( $image, 'url' ); ?>"
                                    alt="<?php echo acf_maybe_get( $image, 'alt' ); ?>">
                            </div>
                            <div class="wrapper-description">
                                <?php echo get_sub_field( 'description' ); ?>
                            </div>
                        </div>
                            <div class="container w-full <?php echo get_sub_field( 'empty_bar_color' ) ;?>" style="min-height: <?php echo $bar_height; ?>">
                                <div class="skills w-7 <?php echo get_sub_field( 'progress_bar_color' ) ;?>" style="min-height: <?php echo $bar_height; ?>; width: <?php echo get_sub_field( 'progress_bar_width' ) ;?>%"></div>
                            </div>
                    <?php endwhile; ?>
            <?php endif; ?>
</section>

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
// $bg_color_vars = acf_maybe_get( $css_vars, 'bg_color' );
// $txt_color_vars = acf_maybe_get( $css_vars, 'txt_color' );

// Fields
$numbers         = get_sub_field( 'numbers' );
$bg_color         = get_sub_field( 'bg_color' );
$txt_color         = get_sub_field( 'txt_color' );

// Configuration
$advanced_mode   = get_sub_field( 'advanced_mode' );
$nb_item_per_row = get_sub_field( 'nb_item_per_row' );


?>
<section class="<?php echo $layout_name .' '. $bg_color .' '. $txt_color; ?> flex items-center p-4">
    <div class="container">
        <div class="mx-auto <?php echo $content_width; ?>">

            <?php
            // numbers
            if ( $numbers ) : ?>
                <?php foreach ( $numbers as $number ) : ?>
                    <div class="wrapper-number flex flex-col justify-around sm:flex-row">

                    <?php foreach ( $number as $num ) : ?>
                        <div class="flex flex-col items-center">
                        <h2 class="text-3xl font-semibold"><?php echo $num["number"] ?></h2>
                        <p class="mt-2"><?php echo $num["legend"] ?></p>
                    </div>
                    <?php endforeach; ?>

                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php

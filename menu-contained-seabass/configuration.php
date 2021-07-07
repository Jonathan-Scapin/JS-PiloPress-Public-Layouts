<?php

add_action( 'init', 'menu_contained_seabass_init' );
function menu_contained_seabass_init() {
    register_nav_menus(
        array(
            'menu_contained_seabass' => 'Menu Contained Seabass',
        )
    );
}

add_action( 'wp_enqueue_scripts', 'menu_contained_seabass_enqueue' );
function menu_contained_seabass_enqueue() {
    wp_enqueue_script( 'jquery' );
}

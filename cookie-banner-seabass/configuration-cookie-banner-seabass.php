<?php

add_action( 'init', 'cookie_banner_seabass_init' );
function cookie_banner_seabass_init() {
    register_nav_menus(
        array(
            'cookie_banner_seabass' => 'Cookie Banner Seabass',
        )
    );
}
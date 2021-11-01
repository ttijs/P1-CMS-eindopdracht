<?php

function mijnthema_menu() {
    register_nav_menu( 'hoofdmenu', 'Het Hoofdmenu' );
}
add_action('init', 'mijnthema_menu');

?>
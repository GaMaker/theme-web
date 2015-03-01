<?php

function accesspress_parallax_hijo_get_my_option()
{
	require get_template_directory() . '-hijo/inc/ajax.php';
	die();
}

add_action("wp_ajax_get_my_option", "accesspress_parallax_hijo_get_my_option");

require get_template_directory() . '-hijo/inc/options-framework/options-framework.php';

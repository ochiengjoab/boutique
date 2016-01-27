<?php 

// This page will go directly in our init.php

function display_errors($errors) {
	$display = '<ul class="bg-danger">';
	foreach($errors as $error) {
		$display .= '<li class="danger">' . $error . '</li>';
	}
	$display .= '</ul>';
	return $display;
}

?>
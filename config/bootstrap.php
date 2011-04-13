<?php

use lithium\core\libraries;

if (!defined('FACEBOOK_LIBRARY_PATH')) {
	define(
		'FACEBOOK_LIBRARY_PATH',
		LITHIUM_LIBRARY_PATH . '/facebook/src'
	);
}

require FACEBOOK_LIBRARY_PATH . '/facebook.php';

$name = 'facebook';
$library = Libraries::get($name);

if (empty($library)) {
	Libraries::add($name, array(
		'bootstrap' => false,
		'path' => FACEBOOK_LIBRARY_PATH
	));
}

?>
<?php
set_include_path(
	dirname(__DIR__).DIRECTORY_SEPARATOR.'library'.PATH_SEPARATOR.
	__DIR__.PATH_SEPARATOR.
	get_include_path()
);
require dirname(__DIR__).'/vendor/autoload.php';

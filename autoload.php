<?php declare(strict_types=1);

spl_autoload_register(function (string $className) {
	$path = str_replace('\\', '/', $className);
	require_once __DIR__ . '/' . $path . '.php';
});
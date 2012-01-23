<?php
/*
 * Copyright (c) 2012, Johannes Becker
 * All rights reserved.
 *
 */
namespace hazel;
define('HYDROGEN_AUTOCONFIG_PATH',
	__DIR__ . '/../../config/hydrogen.autoconfig.php');
require_once(__DIR__ . '/../hydrogen/hydrogen.inc.php');

use hydrogen\autoloader\Autoloader;
Autoloader::registerNamespace('hazel', __DIR__);

?>

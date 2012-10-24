<?php
/**
 * ORMbit - A standalone version of Orinoco Framework's built-in Object-relational mapping (ORM).
 * https://github.com/rawswift/ormbit
 *
 * Orinoco Framework is a lightweight MVC framework for PHP, https://github.com/rawswift/Orinoco-Framework
 *  
 * Copyright (c) 2012 Ryan Yonzon, <rawswift@gmail.com>
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */

define('OB_ROOT_DIR', __DIR__);
require(OB_ROOT_DIR . '/configs/environment.config.php'); // environment configuration

// check the database configuration file
if (!file_exists(OB_CONFIG_DIR . 'database.config.php')) {
	die("ORMbit Error: Unable to load database configuration file (configs/database.config.php).\n");
}

// ...continue
require(OB_CONFIG_DIR . 'database.config.php'); // database configuration
require(OB_CLASSES_DIR . 'obautoloader.class.php'); // autoloader class

// -EOF-
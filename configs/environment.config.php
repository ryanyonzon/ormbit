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

// models
define('MODEL_DIR', ROOT_DIR . '/models/'); // models

// classes
define('CLASSES_DIR', ROOT_DIR . '/classes/'); // classes directory

// configuration directories
define('CONFIG_DIR', ROOT_DIR . '/configs/'); // configuration

// object-relational mapping
define('INTERFACE_DIR', CLASSES_DIR . 'adapter/'); // class interface directory
define('ADAPTER_DIR', CLASSES_DIR . 'adapter/'); // database adapter directory

// file suffixes
define('MODEL_FILE_SUFFIX', '.model'); // model filename suffix
define('CLASS_FILE_SUFFIX', '.class'); // class file suffix

// database/ORM related
define('INTERFACE_FILE_SUFFIX', '.interface'); // class interface file suffix
define('ADAPTER_FILE_SUFFIX', '.adapter'); // adapter file suffix
define('EXTENSION_FILE_SUFFIX', '.class'); // extension file suffix

// file extensions
define('MODEL_FILE_EXTENSION', '.php');
define('CLASS_FILE_EXTENSION', '.php');

// database/ORM related
define('INTERFACE_FILE_EXTENSION', '.php');
define('ADAPTER_FILE_EXTENSION', '.php');

// -EOF-
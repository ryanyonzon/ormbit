<?php
/**
 * ORMbit - A standalone version of Orinoco Framework's built-in Object-relational mapping (ORM).
 * https://github.com/ryanyonzon/ormbit
 *
 * Orinoco Framework is a lightweight MVC framework for PHP, https://github.com/ryanyonzon/Orinoco
 *  
 * Copyright (c) 2008-2012 Ryan Yonzon <ryanyonzon@gmail.com>
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */

// models
define('OB_MODEL_DIR', OB_ROOT_DIR . '/models/'); // models

// classes
define('OB_CLASSES_DIR', OB_ROOT_DIR . '/classes/'); // classes directory

// configuration directories
define('OB_CONFIG_DIR', OB_ROOT_DIR . '/configs/'); // configuration

// object-relational mapping
define('OB_INTERFACE_DIR', OB_CLASSES_DIR . 'adapter/'); // class interface directory
define('OB_ADAPTER_DIR', OB_CLASSES_DIR . 'adapter/'); // database adapter directory

// file suffixes
define('OB_MODEL_FILE_SUFFIX', '.model'); // model filename suffix
define('OB_CLASS_FILE_SUFFIX', '.class'); // class file suffix

// database/ORM related
define('OB_INTERFACE_FILE_SUFFIX', '.interface'); // class interface file suffix
define('OB_ADAPTER_FILE_SUFFIX', '.adapter'); // adapter file suffix
define('OB_EXTENSION_FILE_SUFFIX', '.class'); // extension file suffix

// file extensions
define('OB_MODEL_FILE_EXTENSION', '.php');
define('OB_CLASS_FILE_EXTENSION', '.php');

// database/ORM related
define('OB_INTERFACE_FILE_EXTENSION', '.php');
define('OB_ADAPTER_FILE_EXTENSION', '.php');

// -EOF-
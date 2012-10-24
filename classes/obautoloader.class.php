<?php
/**
 * ORMbit - A standalone version of Orinoco Framework's built-in Object-relational mapping (ORM).
 * https://github.com/rawswift/ormbit
 *
 * Orinoco Framework is a lightweight MVC framework for PHP, https://github.com/rawswift/Orinoco-Framework
 *  
 * Copyright (c) 2008-2012 Ryan Yonzon, <rawswift@gmail.com>
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */

/**
 * OBAutoLoader - A replacement for previous __autoload magic function which will allow other libraries to add their own autoload method
 */
class OBAutoLoader {

	public static function autoloader($_class_name) {

		// try main classes path
		$_main_classes_dir = OB_CLASSES_DIR;
		$_main_classes_path = $_main_classes_dir . strtolower($_class_name) . OB_CLASS_FILE_SUFFIX . OB_CLASS_FILE_EXTENSION;
			if(file_exists($_main_classes_path)){
				require($_main_classes_path);
				return true;
			}

		// try model classes path
		$_model_dir = OB_MODEL_DIR;
		$_model_path = $_model_dir . strtolower($_class_name) . OB_MODEL_FILE_SUFFIX . OB_MODEL_FILE_EXTENSION;
			if(file_exists($_model_path)){
				require($_model_path);
				return true;
			}

		// try adapter classes path
		$_adapter_path = OB_ADAPTER_DIR . strtolower($_class_name) . OB_ADAPTER_FILE_SUFFIX . OB_ADAPTER_FILE_EXTENSION;
			if(file_exists($_adapter_path)){
				require($_adapter_path);
				return true;
			}

	}
	
} // end class

spl_autoload_register(array('OBAutoLoader', 'autoloader')); // register class OBAutoLoader::autoloader

// -EOF-
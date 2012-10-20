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

/**
 * OFLoader - A replacement for previous __autoload magic function which will allow other libraries to add their own autoload method
 */
class OFLoader {

	public static function autoloader($_class_name) {

		// try main classes path
		$_main_classes_dir = CLASSES_DIR;
		$_main_classes_path = $_main_classes_dir . strtolower($_class_name) . CLASS_FILE_SUFFIX . CLASS_FILE_EXTENSION;
			if(file_exists($_main_classes_path)){
				require($_main_classes_path);
				return true;
			}

		// try model classes path
		$_model_dir = MODEL_DIR;
		$_model_path = $_model_dir . strtolower($_class_name) . MODEL_FILE_SUFFIX . MODEL_FILE_EXTENSION;
			if(file_exists($_model_path)){
				require($_model_path);
				return true;
			}

		// try adapter classes path
		$_adapter_path = ADAPTER_DIR . strtolower($_class_name) . ADAPTER_FILE_SUFFIX . ADAPTER_FILE_EXTENSION;
			if(file_exists($_adapter_path)){
				require($_adapter_path);
				return true;
			}

	}
	
} // end class

spl_autoload_register(array('OFLoader', 'autoloader')); // register class OFLoader::autoloader

// -EOF-
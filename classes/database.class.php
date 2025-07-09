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

/**
 * Database - act as a front interface/wrapper for various database adapter
 */
class Database {

	private $_database;
		
	/**
	 * establish database connection using selected database adapter
	 */
	protected function databaseConnect() {
		$_adapter =  OB_DB_ADAPTER;
		$this->_database = new $_adapter(OB_DB_HOST, OB_DB_USERNAME, OB_DB_PASSWORD, OB_DB_NAME);
			if(!$this->_database) {
				throw new Exception('Cannot establish a database connection.');			
			}
	}
	
	/**
	 * perform direct SQL query
	 *
	 * @param string $_sql_statement SQL statement to execute
	 * @return query result
	 */
	protected function rawQuery($_sql_statement) {
		return $this->_database->rawQuery($_sql_statement);		
	}
	
	/**
	 * get and return field's type
	 *
	 * @param string $_model_name model name
	 * @param string $_variable_name variable/property name
	 * @return string field type
	 */
	protected function getFieldType($_model_name, $_variable_name) {
		return $this->_database->getFieldType($_model_name, $_variable_name);
	}

	/**
	 * check is field is auto increment
	 *
	 * @param string $_model_name model name
	 * @param string $_variable_name variable/property name
	 * @return string field type
	 */
	protected function isAutoIncrement($_model_name, $_variable_name) {
		return $this->_database->isAutoIncrement($_model_name, $_variable_name);
	}
	
	/**
	 * check is field/column exists
	 *
	 * @param string $_model_name model name
	 * @param string $_variable_name variable/property name
	 * @return boolean
	 */
	protected function isExists($_model_name, $_variable_name) {
		return $this->_database->isExists($_model_name, $_variable_name);
	}	
	
	/**
	 * get the ID generated in the last query
	 *
	 * @param None
	 * @return ID | false
	 */
	protected function getLastQueryID() {
		return $this->_database->getLastQueryID();
	}
	
	/**
	 * get and return field's flag
	 *
	 * @param string $_model_name model name
	 * @param string $_variable_name variable/property name
	 * @return string field flag
	 */
	protected function getFieldFlags($_model_name, $_variable_name) {
		return $this->_database->getFieldFlags($_model_name, $_variable_name);
	}
	
	/**
	 * escapes special characters in a string 
	 *
	 * @param string $_str string to escape
	 * @return escaped string
	 */
	protected function escapeString($_str) {
		return $this->_database->escapeString($_str);
	}

	/**
	 * fetch result as objects
	 *
	 * @param resource $_res resource/query result
	 * @return row objects
	 */
	protected function fetchObject($_res) {
		return $this->_database->fetchObject($_res);
	}
	
	/**
	 * set data pointer
	 *
	 * @param resource $_res resource/query result
	 * @param int $_pointer
	 */
	protected function dataSeek($_res, $_pointer) {
		$this->_database->dataSeek($_res, $_pointer);
	}
	
	/**
	 * get number of rows/count
	 *
	 * @param resource $_res resource/query result
	 * @return int row count
	 */
	protected function getNumRows($_res) {
		return $this->_database->getNumRows($_res);
	}
	
	/**
	 * get enum data and return its data as an array
	 *
	 * @param string $_field_name field name
	 * @return array
	 */
	protected function getEnumData($_model_name, $_field_name) {
		return $this->_database->getEnumData($_model_name, $_field_name);
	}

} // end class

// -EOF-
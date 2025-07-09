<?php
/**
 * Copyright (c) 2012 Ryan Yonzon <ryanyonzon@gmail.com>
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 
// Enable full-blown error reporting. http://twitter.com/rasmus/status/7448448829
error_reporting(-1);

require('../ormbit.init.php'); // require and initialize ORMbit class

// intantiate: /models/employee.model.php
$employee = new employee();

// record ID
$id = 11;

// select specific record by ID
$employee->select($id);

// try and delete that record
if ($employee->delete()) {
	echo "Record deleted.\n";
} else {
	echo "Unable to delete the record.\n";
}

// -EOF-
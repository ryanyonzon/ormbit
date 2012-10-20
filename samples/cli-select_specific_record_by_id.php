<?php
/**
 * Copyright (c) 2012 Ryan Yonzon, <rawswift@gmail.com>
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
if ($employee->select($id)) {
	// print it out
	echo $employee->id . ", " . $employee->first_name . ", " . $employee->last_name . ", " . $employee->job_id . "\n";
} else {
	echo "Unable to find the record.\n";
}

// -EOF-
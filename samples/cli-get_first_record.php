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

// find twenty(20) employee records
$employee->find(array(
				'limit' => '0,20'
			));

// get the first record
$employee->first();

// print out
echo $employee->id . ", " . $employee->first_name . ", " . $employee->last_name . ", " . $employee->name . "\n";

// -EOF-
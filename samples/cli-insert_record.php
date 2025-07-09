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

$job_id = 1; // Software Engineer (from `job` table)
$privilege = 'Administrator';

$record = array(
		'first_name' => 'Curly',
		'last_name' => 'Howard',
		'phone' => '888-9999',
		'job_id' => $job_id,
		'access' => $privilege,
		'created_on' => date("Y-m-d H:i:s", time())
	);

// insert/save new record
$id = $employee->save($record);

// print record ID
echo "Record ID: " . $id . "\n";

// -EOF-
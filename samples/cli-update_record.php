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
$id = 2;

// try and select a specific record based on the ID given
if ($employee->select($id)) {

	// print out, before record update
	echo "Before update: " . $employee->id . ", " . $employee->first_name . ", " . $employee->last_name . ", " . $employee->job_id . "\n";

	$new_job_id = 1;
	$record_changes = array(
			'first_name' => 'Larry',
			'last_name' => 'Fine',
			'job_id' => $new_job_id
		);

	// try and update the record
	if ($employee->update($record_changes)) {
		// re-select record (get the update record)
		$employee->select($id);

		// print out, after record update
		echo "After update: " . $employee->id . ", " . $employee->first_name . ", " . $employee->last_name . ", " . $employee->job_id . "\n";
	} else {
		echo "Unable to update the record.\n";	
	}

} else {
	echo "Unable to find the record.\n";
}

// -EOF-